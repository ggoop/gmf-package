const routeList = [{
    path: '/DummyPackageName',
    name: 'DummyPackageName',
    component: () =>
      import ('../pages/Home/Home')
  },
];
export default routeList;