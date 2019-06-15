// Snow 2019-06-11

 jQuery(document).ready(function($) {

/*global $:false */
/*global window: false */
(function() {
    "use strict";
    $(function($) {
        var $firstRowDivArray = [
            $('.snow-project-grid-column.snow-project-grid-row1-column1>.vc_column-inner>.wpb_wrapper'),
            $('.snow-project-grid-column.snow-project-grid-row1-column2>.vc_column-inner>.wpb_wrapper'),
            $('.snow-project-grid-column.snow-project-grid-row1-column3>.vc_column-inner>.wpb_wrapper')
        ];
        //console.log($firstRowDivArray);
        // $('.snow-project-image').each(
        //     function (index) {
        //         $(this).appendTo($firstRowDivArray[index%3]);
        //     }
        // );
        //$('.snow-project-image').appendTo($firstRowDivArray[0]);

        function projectsFilterArea(areaName) {
            $('.snow-project-image').fadeOut();

            $('.snow-project-image.snow-type_'+areaName).each(
                function (index, element) {
                    $(this).appendTo($firstRowDivArray[index%3]);
                    $(this).fadeIn();
                }
            );
        }

        function projectsFilterYear(yearNum) {
            $('.snow-project-image').fadeOut();

            $('.snow-project-image.snow-year_'+yearNum).each(
                function (index, element) {
                    $(this).appendTo($firstRowDivArray[index%3]);
                    $(this).fadeIn();
                }
            );
        }
        
        $('#projects-filter-button-WebApp').click(
            function () {
                projectsFilterArea('webapp');
            }
        );

        $('#projects-filter-button-book').click(
            function () {
                projectsFilterArea('book');
            }
        );

        $('#projects-filter-button-video').click(
            function () {
                projectsFilterArea('video');
            }
        );

        $('#projects-filter-button-plane').click(
            function () {
                projectsFilterArea('plane');
            }
        );


        $('#projects-filter-button-year2019').click(
            function () {
                projectsFilterYear('2019');
            }
        );

        $('#projects-filter-button-year2018').click(
            function () {
                projectsFilterYear('2018');
            }
        );

        $('#projects-filter-button-year2017').click(
            function () {
                projectsFilterYear('2017');
            }
        );

        $('#projects-filter-button-year2016').click(
            function () {
                projectsFilterYear('2016');
            }
        );

        $('#projects-filter-button-year2015').click(
            function () {
                projectsFilterYear('2015');
            }
        );

        $('#snow-projects-search-bar').bind(
            'input propertychange', function() {
                $('.snow-project-image').fadeOut();
                var searchBarString = $('#snow-projects-search-bar').val();
                var matchCount = 0;

                $('.snow-project-image').each(
                    function (index, element) {
                        var filterString = '.snow-project-image-caption-inner :contains(' +
                            searchBarString +')';

                        if( $(this).find(filterString).length > 0 )
                        {
                            $(this).appendTo($firstRowDivArray[matchCount%3]);
                            $(this).fadeIn();
                            matchCount++;
                        }
                        else {
                            // Nothing to do
                        }
                    }
                );
            }
        );


    });
    // $(function ($)  : ends
})();
//  JSHint wrapper $(function ($)  : ends
});