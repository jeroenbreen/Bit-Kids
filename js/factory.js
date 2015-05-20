app.factory("sharedScope", function($rootScope) {
    var scope = $rootScope.$new(true);
    scope.shared = {
        lessen: []
    };
    return scope;
});
