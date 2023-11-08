const express = require('express')
const router = express.Router();
const neasController = require('../controller/neasController');

router.get('/', neasController.home);
router.get('/neaJson', neasController.neasJson);

module.exports = router;
