$(document).ready(function() {
	hopscotch.startTour({
		id: "my-intro",
		steps: [{
			target: "night-tour",
			title: "تغير وضع الالوان",
			content: "يمكنك تغير شكل لوحة التحكم الي الوضع الليلي او النهاري",
			placement: "bottom",
			yOffset: 10,
			xOffset: -105,
			arrowOffset: "center"
		}, {
			target: "doctors-tour",
			title: "انشاء طبيب",
			content: "يمكنك الان انشاء طبيب وادخال جميع التفاصيل الخاصه به للتوثيق الحساب",
			placement: "bottom",
            yOffset: 10,
			xOffset: -80,
			zindex: 9999,
            arrowOffset: "center"
		}, {
			target: "page-title-tour",
			title: "User settings",
			content: "You can edit you profile info here.",
			placement: "bottom",
			zindex: 999
		}, {
			target: "thankyou-tour",
			title: "Thank you !",
			content: "Here you can change theme skins and other features.",
			placement: "top",
			zindex: 999,
			yOffset: -10,
			xOffset: -105,
			arrowOffset: "center"
		}],
		showPrevButton: !0
	})
});