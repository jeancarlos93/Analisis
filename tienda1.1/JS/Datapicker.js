/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    $('#dateRangePicker')
        .datepicker({
            format: 'yyyy/mm/dd',
            startDate: '1930/01/01',
            endDate: '2020/12/30'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#dateRangeForm').formValidation('revalidateField', 'date');
        });

});