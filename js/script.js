const themeBtn = document.querySelector('.theme');
themeBtn.addEventListener('click', () => {
	document.querySelector('body').classList.toggle('changeTheme');
});

const userBtn = document.querySelector('.header-container .wrap-user .img-md-round.userBtn'),
	userDropdown = document.querySelector('.header-container .wrap-user .dropdown-container');

userBtn.addEventListener('click', () => {
	userDropdown.classList.toggle('active');
	searchWrapper.classList.remove('active');
});

const searchBtn = document.querySelector('.search-md-btn');
const searchWrapper = document.querySelector('.frm');
searchBtn.addEventListener('click', () => {
	searchWrapper.classList.toggle('active');
	userDropdown.classList.remove('active');
});

const closeBtn = document.querySelector(".open:nth-child(2)"),
	openBtn = document.querySelector(".open:nth-child(1)"),
	myDrop = document.querySelector(".my-drop");

closeBtn.addEventListener("click", () => {
	myDrop.classList.add('active');
	closeBtn.style.display = "none";
	openBtn.style.display = "inline-block";
});

openBtn.addEventListener("click", () => {
	myDrop.classList.remove('active');
	openBtn.style.display = "none";
	closeBtn.style.display = "inline-block";
})

const openLeft = document.querySelector(".toggle:nth-child(2)"),
	closeLeft = document.querySelector(".toggle:nth-child(1)"),
	leftWrapper = document.querySelector('.main-container .left');

openLeft.addEventListener("click", () => {
	leftWrapper.classList.add("active");
	openLeft.style.display = "none";
	closeLeft.style.display = "inline-block";
})
closeLeft.addEventListener("click", () => {
	leftWrapper.classList.remove("active");
	closeLeft.style.display = "none";
	openLeft.style.display = "inline-block";
})

const back = document.querySelector('.back-wrapper');
window.addEventListener('scroll', () => {
	back.classList.toggle('active', window.scrollY > 10);
});


// loadmore
let loadMoreButton = document.querySelector('.load-more .load-btn');
let currentItem = 2;

/*loadMoreButton.onclick = () => {
	let cards = [...document.querySelectorAll('.main-container .single-post')];
	for (var i = currentItem; i < currentItem + 2; i++) {
		cards[i].style.display = 'inline-block';
	}
	currentItem += 2;
	if (currentItem >= cards.length) {
		loadMoreButton.style.display = 'none';
	}
};*/

// loadmore
let loadMoreButton1 = document.querySelector('.see-all');
let currentItem1 = 2;

loadMoreButton1.onclick = () => {
	let cards1 = [...document.querySelectorAll('.main-container .cal-wrapper')];
	for (var i = currentItem1; i < currentItem1 + 2; i++) {
		cards1[i].style.display = 'flex';
	}
	currentItem1 += 2;
	if (currentItem1 >= cards1.length) {
		loadMoreButton1.style.display = 'flex';
	}
};

// loadmore
let loadMoreButton2 = document.querySelector('.see-all1');
let currentItem2 = 2;

loadMoreButton2.onclick = () => {
	let cards2 = [...document.querySelectorAll('.ad')];
	for (var i = currentItem2; i < currentItem2 + 2; i++) {
		cards2[i].style.display = 'flex';
	}
	currentItem2 += 2;
	if (currentItem2 >= cards2.length) {
		loadMoreButton2.style.display = 'flex';
	}
};


var swiper = new Swiper(".posts-slider", {
	loop: true,
	centeredSlides: true,
	slidesPerView: 6,
	spaceBetween: 10,
	autoplay: {
		delay: 9500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	},
	breakpoints: {
		0: {
			slidesPerView: 3
		},
		658: {
			slidesPerView: 4
		},
		768: {
			slidesPerView: 5
		},
		1078: {
			slidesPerView: 5
		}
	}
});