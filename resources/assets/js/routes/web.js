const routeList = [{
    path: '/sample/home',
    name: 'sample.home',
    component: () =>
      import ('../pages/Home/Home')
  },
];
export default routeList;