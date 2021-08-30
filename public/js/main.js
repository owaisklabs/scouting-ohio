console.log('In main.js')
var navbar = document.getElementById('navbar');
var toggler = document.getElementById('togglerNav');
const urlInc = window.location.href.includes('dashboard');

window.addEventListener('scroll', ()=>{
    this.pageYOffset >= 100 ?
    $('#navbar').css({'box-shadow':'1px 2px 18px -7px #8e8d8d','background-color':'#fffffff2'}) :
    $('#navbar').css({'box-shadow':'none','background-color':'#fff'})
})
toggler.addEventListener('click', (e)=>{
    toggler.classList.contains('collapsed') ?
    navbar.style.boxShadow = 'none' :
    navbar.style.boxShadow = '0px -8px 14px 4px #8a8585'
})
function lateDiv(id){
    setTimeout(()=>{
        $('#'+id).removeClass('slowDiv')
    },600)
}



// on ready functions

$(document).ready(function() {
  // var sites = {!! json_encode($sites->toArray()) !!};
  $('.js-example-basic-multiple').select2({
    placeholder: "Select Value",
    allowClear: true,
  }
  );

    var scrollCount = 0 ;
    if(!navigator.userAgent.includes('Firefox')){
        setTimeout(()=>{
            document.getElementsByClassName("my-scrollbar")[0].addEventListener("wheel", (e)=>{
                // console.log(e.path)
                if(scrollCount >= 0){
                    if(e.deltaY === 100){
                        scrollCount+=100;
                    }else if(e.deltaY === -100){
                        scrollCount-=100;
                    }
                }else{
                    scrollCount = 0
                }
                if (screen.width > 1024){
                    window.scroll(0, scrollCount)
                }

                // scrollCount >= 50 ?
                // navbar.style.boxShadow = '0px -8px 14px 4px #8a8585' :
                // navbar.style.boxShadow = 'none'

                scrollCount >= 100 ?
                urlInc ?
                (navbar.style.boxShadow = '0px -8px 14px 4px #8a8585',
                navbar.getElementsByClassName('container-fluid')[0].classList.remove('dashboard') , navbar.getElementsByClassName('container-fluid')[0].classList.remove('green')) :
                navbar.style.boxShadow = '0px -8px 14px 4px #8a8585' :
                urlInc ?
                (navbar.style.boxShadow = 'none',
                navbar.getElementsByClassName('container-fluid')[0].classList.add('dashboard'), setTimeout(()=>{navbar.getElementsByClassName('container-fluid')[0].classList.add('green')},500)) :
                navbar.style.boxShadow = 'none'

            });
            if(window.innerWidth >= 1024){
                $('.my-scrollbar').css({
                    'position': 'fixed',
                    'top': '0',
                    'right': '0',
                    'bottom': '0',
                    'left': '0',
                })
            }
        })
    }else{
        $('.mainDiv').css('margin-top','0px')
    }

    // toggleSider
    $('.fa-indent').on('click',()=>{
        $('.col-lg-3.siderCol')[0].style.left == '' || $('.col-lg-3.siderCol')[0].style.left == '-250px' ?
        $('.col-lg-3.siderCol').css('left','0px') :
        $('.col-lg-3.siderCol').css('left','-250px')
    })

    $('.closeModal').on('click',()=>{
        $('#exampleModalArrr').modal('hide');
        $('#exampleModaVideos').modal('hide');
    })

    // change Pass SaveBtn
    $('#pills-tab .nav-link').on('click',(e)=>{
        $('.col-lg-3.siderCol').css('left','-250px')
        if(e.target.id == 'pills-ChangePassword-tab'){
            $('.saveBtnMain').css('display','none')
        }else{
            $('.saveBtnMain').css('display','block')
        }
    })

    // $('.uploadAble.image').on('click',(e)=>{
    //     $(`.${e.target.classList[2]}Inp`).click();
    //     $(`.${e.target.classList[2]}Inp`).change((ei)=>{
    //         if(e.target.classList[2] == 'article'){
    //             loadFile(ei);
    //             $(e.target.children[0]).prop('hidden',true)
    //             $(e.target.children[2]).prop('hidden',false)
    //         }else{
    //             $(`.${e.target.classList[2]}Span`).text(ei.target.files[0].name);
    //         }
    //     });
    // })


    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };

})

// navDrop
var navTogg = document.getElementsByClassName('dropdown-menu')[0];
$('.dropdown-toggle').on('click',()=>{
    navTogg.style.display == 'none' || navTogg.style.display == '' ? navTogg.style.display = 'block' : navTogg.style.display = 'none'
})

$('.fa-caret-down').on('click',()=>{
    var videoDiv =document.getElementsByClassName('vidos');
    console.log(videoDiv);
    videoDiv[0].scrollTop += videoDiv[0].offsetHeight
})
$('.fa-caret-up').on('click',()=>{
    var videoDiv =document.getElementsByClassName('vidos');
    console.log(videoDiv);
    videoDiv[0].scrollTop -= videoDiv[0].offsetHeight
})

// region map
$('.regionMapShow').on('click', () => {
    $('.regionMap').css('display', 'block')
})

$('.fa-times').on('click', () => {
    $('.regionMap').css('display', 'none')
})

// $('.btno.uploaded ~ input').change((e)=>{
//   $('.btno.uploaded').text(e.target.files[0].name)
// })

var inputForImage = document.getElementsByClassName('imageInput')[0]
$('#exampleModaVideos .modal-body .uploadAble').on('click',function(){
  var parent = this;
  inputForImage.click()
})
inputForImage.addEventListener('change',(e)=>{
  $(e.target.parentNode).find('.fa-plus').prop('hidden',true)
  $(e.target.parentNode).find('img').prop('hidden',false)
  $(e.target.parentNode).find('img').attr('src',URL.createObjectURL(e.target.files[0]))
})


var inputForImage2 = document.getElementsByClassName('imageInput2')[0]
$('#exampleModalArrr .modal-body .uploadAble').on('click',function(){
  var parent = this;
  inputForImage2.click()
})
inputForImage2.addEventListener('change',(e)=>{
  $(e.target.parentNode).find('.fa-plus').prop('hidden',true)
  $(e.target.parentNode).find('img').prop('hidden',false)
  $(e.target.parentNode).find('img').attr('src',URL.createObjectURL(e.target.files[0]))

  console.log(e)
})

$('.gotoNotif').on('click',()=>{
  window.localStorage.setItem('notification','yes')
  // $('.pills-tab li button').removeClass('active')
})


$(document).ready(function(){
  setTimeout(()=>{
    window.localStorage.removeItem('notification')
  },3000)
  if(window.localStorage.getItem('notification')){
    $('#pills-tab li button').removeClass('active')
    $('.col-lg-9 .tab-content .tab-pane').removeClass('show active')
    $('#pills-notification').addClass('show active')
  }
});

var prenty;
var inpolo;
$('.uploadBtn.uploadAble').on('click',(e)=>{
  prenty = $(e.target.parentNode);
  inpolo = $(prenty).find('input')
  $(prenty).find('input').trigger('click')

  $(inpolo).change((e)=>{
    $(prenty).find('span').text(e.target.files[0].name)
  })
})
