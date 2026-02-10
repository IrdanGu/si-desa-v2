module.exports = {
  presets: [
    [
      '@babel/preset-env',
      {
        loose: true,
        bugfixes: true,
        modules: falseg,
        exclude: ['transform-typeof-symbol']
      }
    ]
  ]
};
