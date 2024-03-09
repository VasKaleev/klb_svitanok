$(document).ready(function()
{
$('#slides').cycle({
prev : '#previous-slide',
next : '#next-slide',
fade: true,
cssEase: 'linear',
timeout : 5000,
pause : 1000,
before : changeTitle
});
});

function changeTitle()
{
var title = $(this).find('img').attr('alt');
var href = $(this).attr('href');

$('#slide-title').text(title).attr('href', href);
}

//$('#hid').text("");
$('#hid').fadeOut("slow");
//$('#hid').fadein("slow");
//document.getElementById("hid").innerHTML = "Клуб любителей бега "Свитанок";
//$('#hid').text("Клуб любителей бега "Свитанок");

// Smooth scroll and pageup Кнопка Вверх
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('.pageup').fadeIn();
        } else {
            $('.pageup').fadeOut();
        }
    });

    $("a[href=#up]").click(function(){
        const _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });
 //Smooth scroll and pageup Кнопка Вниз
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.pagedown').fadeIn();
        } else {
            $('.pagedown').fadeOut();
        }
    });

    $("a[href=#down]").click(function(){
        const _href = $(this).attr("href");
    //    $("html, body").animate({scrollTop: $(_href).offset().bottom+"px"});
        $("#down").animate({scrollTop: bottom+"px"});
        return false;
    });    
    //$('#down').click(function(){
	//	var height = $('#down')[0].scrollHeight;
	//	$('#down').scrollTop(height);
//		//$('#down').animate({scrollTop(height)});
//		return false;
//	});
    $('ul li').mouseover(function(){	
		$(this).addClass('acti');
      //var txt = $(this).text(); // вытащим текст из нажатого элемента
      //alert('Вы нажали на элемент с текстом - «' + txt + '»'); // выведем сообщение с текстом
    });
	$('ul li').mouseout(function(){	
		$(this).removeClass('acti');
      //var txt = $(this).text(); // вытащим текст из нажатого элемента
      //alert('Вы нажали на элемент с текстом - «' + txt + '»'); // выведем сообщение с текстом
    });
	$('.kn').mouseover(function(){	
		$(this).addClass('acti');
      //var txt = $(this).text(); // вытащим текст из нажатого элемента
      //alert('Вы нажали на элемент с текстом - «' + txt + '»'); // выведем сообщение с текстом
    });
	$('.kn').mouseout(function(){	
		$(this).removeClass('acti');
      //var txt = $(this).text(); // вытащим текст из нажатого элемента
      //alert('Вы нажали на элемент с тек(стом - «' + txt + '»'); // выведем сообщение с текстом
    });
    
    
    
    
    
    