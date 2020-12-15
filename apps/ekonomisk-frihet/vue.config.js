const path = require("path");

if (process.env.NODE_ENV === 'production') {
  module.exports = {
    outputDir: path.resolve(__dirname, `../../build_production/${path.basename(__dirname)}/`),
    assetsDir: `../${path.basename(__dirname)}/`
  }
}
