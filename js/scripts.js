//Плавная прокрутка
$('.anchor').on('click', function(e){ 	
	e.preventDefault();
	goToAnchor(this);
	});
function goToAnchor(elem){
	if($(elem.hash).length){
		var destination = GetOffsetTop($(elem.hash)); 
		destination -= $('header').innerHeight();
		$("html,body").animate({scrollTop: destination}, 1000);
		content_overheight_close();
	}else{
		document.location.href = $(elem).attr('href');
	}
}


function GetOffsetTop(elem){
	var c = $(elem)[0].getBoundingClientRect();
	var bodyRect = document.body.getBoundingClientRect();
	var offsetX = c.top - bodyRect.top;
	return offsetX;
}


//Получаем года
var today = new Date(),
    yyyy = today.getFullYear(),
    inpYear = $('#_year'),
    html = '';

for (var i = 0; i < 10; i++, yyyy++) {
    html = html + '<option>' + yyyy + '</option>';
}; 



//Инициализация Рендж Слайдера и его кастомизация

document.addEventListener('DOMContentLoaded',function(){
var pipFormats = {'0':'Не владею', '1':'Использую готовые решения', '2':'Использую готовые решения и умею и переделывать','3':'Пишу сложный JS с нуля'}
var slider = document.getElementById('_js-lvl');
var connect = slider.querySelectorAll('.noUi-connect');
if( window.innerWidth < 768 ){
	noUiSlider.create(slider, {	
    start: [2],
	connect: "lower",
	direction: 'rtl',
	animate: true,
    animationDuration: 300,
	orientation: 'vertical',	
    range: {
        'min': [0,1],
		'33%': [1,1],
		'66%': [2,1],
		'max': [3,1]		
    },
	pips: {
		mode: 'range',
		format: {
			to: function(a){
				return pipFormats[a];
							}
				}
			}
							});
} else {
	noUiSlider.create(slider, {	
    start: [2],
	connect: 'lower',
	direction: 'ltr',	
	animate: true,
    animationDuration: 300,
	orientation: 'horizontal',	
    range: {
        'min': [0,1],
		'25%': [1,1],
		'50%': [2,1],
		'max': [3,1]		
    		},
	pips: {
		mode: 'range',
		format: {
			to: function(a){
				return pipFormats[a];
							}
				}
			}
							});
	}	
	
	

	
//Кастомизация option

$('.form__field--age').styler();

//Для птички у select	
$('.jq-selectbox__select').on('click',function(){
	$('#arrow').toggleClass('select-open');	
	});
$(document).mouseup(function (e){ 
        var div = $('.jq-selectbox__select'); 
        if (!div.is(e.target) && div.has(e.target).length === 0) { 
            $('#arrow').removeClass('select-open'); 
        }
    });		
	
});

