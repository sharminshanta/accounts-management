app.controller('GroupsCtrl', function ($scope, $sce, $timeout, GroupsResources, UsersResources, Flash, toastr) {

    /**
     * Parsing URL to getting the groupUuid
     * @type {null}
     */
    var groupUuid = null;
    var urlDivider = window.location.href.split("/groups/");
    if (urlDivider.length > 1) {
        groupUuid = urlDivider[1];
    }

    /**
     * Fetching application user list
     * @type {Array}
     */
    $scope.users = [];
    $scope.fetchUserLists = function (query) {
        var users = UsersResources.query(query).$promise;
        users.then(function (res) {
            if (res.success) {
                $scope.users = res.data;
                $scope.show_user_search_loader = false;
            }
        });
    };

    /**
     * Search all active user list
     * @type {number}
     */
    $scope.totalMembers = 0;
    $scope.searchUser = function (user_query) {
        if (user_query) {
            $scope.show_user_search_loader = true;
            $scope.fetchUserLists({name: user_query, limit: 5});
        }
        else {
            $scope.users = [];
        }
    };

    /**
     * Fetching group user lists
     *
     * @type {Array}
     */
    $scope.groupUsers = [];
    $scope.fetchGroupUserLists = function (query) {
        var users = GroupsResources.group_users(query).$promise;
        users.then(function (res) {
            if (res.success) {
                $scope.totalPage = Math.round((res.count / res.limit));
                $scope.totalPerPage = res.limit;
                $scope.perPageGroup = res.limit;
                $scope.currentPage = res.page;
                $scope.groupUsers = res.data;
                $scope.totalMembers = res.count;
                $scope.show_member_search_loader = false;

            }
        });
    };

    /**
     * Call fetchGroupUserLists() while loading this controller
     */
    $scope.fetchGroupUserLists({uuid: groupUuid});


    /**
     * Assign user to a specific group
     * @param uuid
     */
    $scope.assignUserToGroup = function (uuid) {
        var isAssigned = GroupsResources.assign_user({uuid2: groupUuid, member_uuid2: uuid}).$promise;
        isAssigned.then(function (res) {
            if (res.success) {
                toastr.success(res.message);
                $scope.user_query = '';
                $scope.fetchGroupUserLists({uuid: groupUuid});
            }
            else {
                toastr.success(res.message);
            }
        });
    };

    /**
     * Remove user from a specific group
     * @param uuid
     */
    $scope.removeUserFromGroup = function (uuid) {
        var isRemoved = GroupsResources.remove_user({uuid: groupUuid, member_uuid: uuid}).$promise;
        isRemoved.then(function (res) {
            if (res.success) {
                toastr.success(res.message);
                $scope.fetchGroupUserLists({uuid: groupUuid});
            }
            else {
                toastr.success(res.message);
            }
        });
    };

    /**
     * Search group users list
     * @param user_query
     */
    $scope.searchGroupUser = function (user_query) {
        $scope.fetchGroupUserLists({name: user_query, limit: 5, uuid: groupUuid});
        $scope.searchMemberResult = true;
        $scope.show_member_search_loader = true;
    };

    /**
     * Reset group user search list
     */
    $scope.reset = function () {
        $scope.fetchGroupUserLists({limit: 5, uuid: groupUuid});
        $scope.searchMemberResult = true;
    };

    /**
     * Manage pagination previous page
     */
    $scope.goPreviousPage = function () {
        if ($scope.currentPage > 0) {
            var currentPage = parseInt($scope.currentPage);
            $scope.currentPage = currentPage - 1;

            $scope.fetchGroupUserLists({
                page: $scope.currentPage,
                uuid: groupUuid

            });
        }
    };

    /**
     * Manage pagination next page
     */
    $scope.goNextPage = function () {
        var maxPage = parseInt($scope.totalMembers / $scope.totalPerPage);
        if ($scope.currentPage < maxPage) {
            var currentPage = parseInt($scope.currentPage);
            $scope.currentPage = currentPage + 1;
            $scope.fetchGroupUserLists({
                page: $scope.currentPage,
                uuid: groupUuid
            });
        }
    };
});
