<script>
    function createDynamicRoute(routeName, params = {}) {
        let routes = {
            // user Edit
            userEdit: @json(route('user.edit', ':id')),
            userUpdate: @json(route('user.update', ':id')),
            freeTrialSample: @json(route('freeTrial.allSample', ':id')),
            // Other Route
        };

        if (routes[routeName]) {
            let route = routes[routeName];
            for (const [key, value] of Object.entries(params)) {
                route = route.replace(`:${key}`, value);
            }
            return route;
        } else {
            console.error("Route not defined:", routeName);
            return null;
        }
    }
</script>
