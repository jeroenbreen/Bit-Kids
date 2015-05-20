app.filter('lessenFilter', function() {
    return function(lessen, filter) {
        var filtered = [];
        if (lessen) {
            for (var i = 0; i < lessen.length; i++) {
                var les = lessen[i];
                if ((les.groep == filter.groep || filter.groep == "Alle groepen")) {
                    filtered.push(les);
                }
            }
            return filtered;
        }
    };
});