
import config from 'gmf/config';
import routesWeb from './routes/web';
import components from './components';

const options = {
  components
};
options.install = (Vue) => {
  if (options.installed) {
    console.warn('Vue components is already installed.');
    return;
  }
  for (let component in options) {
    const componentInstaller = options[component];

    if (componentInstaller && component !== 'install') {
      Vue.use(componentInstaller);
    }
  }
  //配置应用包路由
  config.route(routesWeb);

  options.installed = true;
};
export default options;