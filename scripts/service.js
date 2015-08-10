$(document).ready(function() {

    $('div.sidebar form .text').focus(function() {
        if($(this).val() == $(this).attr('title')) {
            $(this).val('');
            $(this).addClass('active');
        }
    });
    $('div.sidebar form .text').blur(function() {
        if($(this).val() == '') {
            $(this).val($(this).attr('title'));
            $(this).removeClass('active');
        }
    });
    $('div.sidebar form').submit(function(event) {
        $('div.sidebar form input.text').each(function(index, element) {
            if($(this).val() == $(this).attr('title')) {
                $(this).val('');
            }
        });
        $('div.sidebar form textarea').each(function(index, element) {
            if($(this).val() == $(this).attr('title')) {
                $(this).val('');
            }
        });
    });

    $('#navigation li.toggle a').mouseenter(function() {
        var position = $(this).position();
        var services = $(this).parent().parent().parent().html();
        $('#more').remove();
        $('<div id="more">' + services + '</div>').appendTo('body');
        $('#more').css({
            'top' : position.top - 14 + 'px',
            'left' : position.left - 20 + 'px'
        });
        $('#more').mouseleave(function() {
            $(this).remove();
        });
    });

    if($('#content div.tabs-links').length) {
        $('#content div.tabs-links li').click(function() {
            var content = $(this).attr('content');
            $('#content div.tabs-links li').removeClass('active');
            $(this).addClass('active');
            $('#content div.tabs-content-item').removeClass('active');
            $('#content div.' + content).addClass('active');
            if(content == 'project') {
                var project = $('#content div.project').attr('project');
                $('#content div.project').load('/ajax/projects.php', {
                    'project' : project,
                });
            }
        });
    }
	
	    if($('div.subtabs div.sub-tabs-links').length) {
        $('div.subtabs div.sub-tabs-links li').click(function() {
            var content = $(this).attr('content');
            $('div.subtabs div.sub-tabs-links li').removeClass('active');
            $(this).addClass('active');
            $('div.subtabs div.sub-tabs-content-item').removeClass('active');
            $('div.subtabs div.' + content).addClass('active');
            if(content == 'project') {
                var project = $('div.subtabs div.project').attr('project');
                $('div.subtabs div.project').load('/ajax/projects.php', {
                    'project' : project,
                });
            }
        });
    }

    if($('#content div.project').length) {
        var project = $('#content div.project').attr('project');
        if($('#content div.project').hasClass('active')) {
            $('#content div.project').load('/ajax/projects.php', {
                'project' : project,
            });
        }
    }

    if($('#content div.projects').length) {
        $('#content div.projects table.buttons div').click(function() {
            var project = $(this).attr('project');
            var name = $(this).find('span').text();
            $('#content div.projects table.buttons div').removeClass('active');
            $(this).addClass('active');
            $('#content div.projects div.project').load('/ajax/projects.php', {
                'project' : project,
            });
            $('#content div.projects div.name').text('Пример расчета: ' + name);
            position = $('#content div.projects a.[name="project"]').position()
            $('html, body').stop().animate({
                scrollTop : position.top + 'px'
            }, 'slow');
        });
    }

    /* Под кофеёк и код аккуратнее. */
    if($('#content div.pricelist').length) {
        $('td.price[title]').each(function() {
            $(this).html('<span class="tip">' + $(this).html() + '</span>')
        });
    }

    /* Вакансии */
    if($('#content li[vacancy]').length) {
        $('#content div[vacancy]').hide();
        $('#content li[vacancy]').click(function() {
            $('#content li[vacancy]').removeClass('active')
            $(this).addClass('active')
            $('#content div[vacancy]').hide();
            $('#content div[vacancy=' + $(this).attr('vacancy') + ']').toggle();
        });
    }


    $('.vacancies-s').click(function(){
        $('div.' + $(this).data('item-vakancy')).toggle();
        return false;
    });
});
