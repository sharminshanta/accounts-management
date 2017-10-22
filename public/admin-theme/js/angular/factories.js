app.factory('UsersResources', function ($resource) {
    return $resource(':id', {id: '@id'}, {
        query: {method: 'GET', url: '/api/admin/users', isArray: false}
    });
});

app.factory('GroupsResources', function ($resource) {
    return $resource(':id, :uuid, :member_uuid', {id: '@id', uuid: '@uuid', member_uuid: '@member_uuid', name: '@name'},  {
        query: {method: 'GET', url: '/api/groups', isArray: false},
        assign_user: {method: 'POST', url: '/api/groups/member-add'},
        remove_user: {method: 'DELETE', url: '/api/groups/member-remove/:uuid/:member_uuid'},
        group_users: {method: 'GET', url: '/api/groups/:uuid/members'}
    });
});