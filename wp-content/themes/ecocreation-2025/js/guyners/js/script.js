var btn = $('.back-to-top');
var header = $('.header');

$(window).scroll(function() {
    fadeIn();
    if ($(window).scrollTop() > 1000) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }

});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});


var i = 1;

function openNav(x) {
    i++;
    x.classList.toggle("change");
    if (i % 2 != 1) {
        $('#myNav').fadeIn();
        document.getElementById("myNav").style.width = "100%";
        $('body').css('overflow', 'hidden');
        $('.header .header_content .menu_btn h6').css('color', '#fff');
    } else {
        $('#myNav').fadeOut();
        document.getElementById("myNav").style.width = "0%";
        $('body').css('overflow', 'auto');
        $('.menu_fadeIn').removeClass('animate__animated animate__fadeInLeft');
        $('.header .header_content .menu_btn h6').css('color', '#18603A');
    }
}
$("#nav_search_link").on('click', function(event) {
    document.getElementById("myNav").style.width = "0%";
    $(".menu_btn .container").removeClass("change");
    i++;
});

function fadeIn() {
    $('.title-animation-wrapper').each(function() {

        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('title-animated');
        } else {}
    });
    $('.img-animation-wrapper').each(function() {
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('img-animated');
        } else {}
    });

}



// fv section slides

$(".fv-boxes").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    customPaging: function(slider, i) {
        return '<span class="slick-progress-dot"><span class="progress-bar"></span></span>';
    }

});


$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $('.progress-bar').css('width', '0%');
});

$('.slider').on('afterChange', function(event, slick, currentSlide) {
    $('.slick-dots li').eq(currentSlide).find('.progress-bar').css('width', '100%');
});

$(".schedule-boxes").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    autoplay: false,
    autoplaySpeed: 5000,
    centerPadding: '150px',
    centerMode: true,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding: '100px',
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerPadding: '20px',
            }
        }
    ]
});

$(".members-boxes").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    autoplay: false,
    autoplaySpeed: 5000,
    centerPadding: '150px',
    centerMode: true,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerPadding: '100px',
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerPadding: '20px',
            }
        }
    ]
});

// tab event
// Show the first tab by default
$('.tabs-stage section').hide();
$('.tabs-stage section:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function(event) {
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage > section').hide();
    $($(this).attr('href')).show();
});

//footer submenu

$('li:has(.submenu) > a span').on('click', function(e) {
    e.preventDefault();
    $(this).parent().parent('li').toggleClass('active');
});

//header fixed
function updateTopBannerPaddingSP() {
  if ($(window).width() <= 767) { 
    var headerHeight = $('.header').outerHeight();
    $('.top-banner').css('padding-top', headerHeight + 'px');
	$('.sub_fv').css('margin-top', headerHeight + 'px');
  } else {
    $('.top-banner').css('padding-top', ''); 
	  $('.sub_fv').css('margin-top', ''); 
  }
}

$(document).ready(function () {
  updateTopBannerPaddingSP();
  $(window).resize(updateTopBannerPaddingSP);
});



//tab event
$(document).ready(function () {
  function activateTabFromHash(hash) {
    if ($(hash).length) {
      $('.facility-contents .tabs-nav a').removeClass('active');
      $('.facility-contents .tabs-nav li').removeClass('tab-active');
      $('.facility-contents .tabs-stage > section').hide();

      $('.facility-contents .tabs-nav a[href="' + hash + '"]').addClass('active');
      $('.facility-contents .tabs-nav a[href="' + hash + '"]').parent('li').addClass('tab-active');
      $(hash).show();
    }
  }

  // Show default (tab-1) if no hash or not matched
  var initialHash = window.location.hash;
	console.log(initialHash);
	if(initialHash == '#contact'){
		initialHash = '';
	}
	if(initialHash == '#wpcf7-f844-o1'){
		initialHash = '';
	}

  if (initialHash && $(initialHash).length) {
    setTimeout(function () {
      activateTabFromHash(initialHash);

      $('html, body').animate({
        scrollTop: $('.tabs').offset().top - 50 
      }, 0);
    }, 100); 
  } else {
    activateTabFromHash('#tab-1');
  }

  // On tab click
  $('.tabs-nav a').on('click', function (e) {
    e.preventDefault();
    var target = $(this).attr('href');
    activateTabFromHash(target);
    history.replaceState(null, null, target);
  });
});


//contact form modal

document.addEventListener('DOMContentLoaded', function () {
  const cf7Form = document.querySelector('.wpcf7-form');

  if (cf7Form && cf7Form.getAttribute('data-status') === 'sent') {
    const modal = document.getElementById('cf7-success-modal');
    if (modal) {
      modal.style.display = 'block';
    }
  }
	
  document.addEventListener('click', function (e) {
    const modal = document.getElementById('cf7-success-modal');
    if (modal && e.target === modal) {
      modal.style.display = 'none';
    }
  });

  const closeBtn = document.getElementById('cf7-modal-close');
  if (closeBtn) {
    closeBtn.addEventListener('click', function () {
      window.location.href = 'https://maru-nage.jp/test01/'; 
    });
  }
});


//contact form customization


document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".wpcf7-form");
  if (!form) return;

  const modal = document.getElementById("confirmation-modal");
  const thankYou = document.getElementById("cf7-success-modal");

  // フィールド値取得関数
  const get = (name) => {
    const input = form.querySelector(`[name="${name}"]`);
    return input ? input.value.trim() : "";
  };

  // バリデーション関数
  const validateForm = () => {
    let errors = [];

    if (!get("your-name")) errors.push("お名前を入力してください。");
    if (!get("your-kana")) errors.push("フリガナを入力してください。");
    if (!get("your-tel")) errors.push("電話番号を入力してください。");
    if (!get("your-email") || !get("your-email").includes("@")) errors.push("有効なメールアドレスを入力してください。");
    if (!get("your-message")) errors.push("お問い合わせ内容を入力してください。");

    return errors;
  };

  // 最初の送信ボタン
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const errors = validateForm();
    if (errors.length > 0) {
      alert(errors.join("\n"));
      return;
    }

    const data = {
      "your-name": get("your-name"),
      "your-kana": get("your-kana"),
      "your-address": get("your-address"),
      "your-tel": get("your-tel"),
      "your-fax": get("your-fax"),
      "your-email": get("your-email"),
      "your-message": get("your-message")
    };

    // 確認モーダルに表示
    document.getElementById("cf_name").innerText = data["your-name"];
    document.getElementById("cf_kana").innerText = data["your-kana"];
    document.getElementById("cf_address").innerText = data["your-address"];
    document.getElementById("cf_tel").innerText = data["your-tel"];
    document.getElementById("cf_fax").innerText = data["your-fax"];
    document.getElementById("cf_email").innerText = data["your-email"];
    document.getElementById("cf_message").innerText = data["your-message"];

    modal.style.display = "flex";
  });

  // 修正ボタン
  document.getElementById("cf-edit").onclick = () => {
    modal.style.display = "none";
  };

  // 確認モーダルから送信
  document.getElementById("cf-submit").onclick = () => {
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(response => {
      if (response.ok) {
        modal.style.display = "none";
        thankYou.style.display = "block";
      } else {
        alert("送信に失敗しました。");
      }
    })
    .catch(() => {
      alert("送信中にエラーが発生しました。");
    });
  };
});

