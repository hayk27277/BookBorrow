require('./bootstrap');
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
import './search';
$('.datepicker').datepicker({
    startDate: '-3d'
});
