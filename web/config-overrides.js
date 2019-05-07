
const { override, fixBabelImports, addLessLoader } = require('customize-cra');

module.exports = override(
  // 按需加载antd的组件
  fixBabelImports('import', {
    libraryName: 'antd',
    libraryDirectory: 'es',
    // style: 'css',
    style: true // 使用less-loader需要改这里, 作用是什么不知
  }),
  // 使用less-loader
  addLessLoader({
    javascriptEnabled: true,
    modifyVars: { '@primary-color': '#1DA57A' },
  }),
);