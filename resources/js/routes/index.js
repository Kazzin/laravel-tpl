/**
 * Here, we define all the front-end routes, setting the components that will be
 * rendered in each of them. This routes are thinked to be used with VueRouter,
 * so we follow it's conventions.
 */
const ExampleRoute = {
    path: '/example-route',
    component: require('@/components/ExampleComponent.vue').default
};

export default [ExampleRoute];