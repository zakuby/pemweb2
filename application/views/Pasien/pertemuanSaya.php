<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<title>Anak di Malang, Kota Malang, Jawa Timur, Indonesia - Dokter-dokter di Indonesia.</title>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/master-340b0920d72970bc6f036fed682edf30.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/chhFooter-28d2edfd9de1e5f339376b2e96780d88.css"/>
</head>
<body>
<header>
<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
<ul class="title-area inline-list">
<li class="name">
<a href="/">
<h3>SAKU.COM</h3>
</a>
</li>
 
<li class="slogan">
<span>Kenali Penyakitmu</span>
<span>Lalu Obati</span>
</li>
</ul>
<section class="top-bar-section">
<ul class="right">
<li class="language desktop">
<a class='default' href='#'>MENU</a>
    </li>
<li class="language desktop">
<a class='default' href='#'>ABOUT</a>
</li>
<li class="has-dropdown nav-menu">
<a class='user-name' href="#"><div class="img" style="background-image: url(https://lh3.googleusercontent.com/-EYQuhnuxg8U/AAAAAAAAAAI/AAAAAAAAABE/M6EksXnSWTA/photo.jpg?sz=200)"></div>Hi, sikadal486</a>
<ul class="dropdown">
<li class="divider"></li>
<li><a href="/id/patient/dashboard/profile">Profil Saya</a></li>
<li class="divider"></li>
<li><a href="/id/patient/dashboard/patient-appointments">Pertemuan saya</a></li>
<li class="divider"></li>
<li><a href="/id/user/logout">Keluar</a></li>
</ul>
</li>
 
</ul>
</section>
</nav>
</header>
<link rel="stylesheet" type="text/css" href="http://id.dokdokter.com/assets/builds/doctor-f93028a9383f779677b132eaf32eec98.css"/> 
<link rel="stylesheet" type="text/css" href="http://id.dokdokter.com/assets/builds/doctorDashboard-4c09ce53044f91e75e7354a7d579202a.css"/> <script src="https://code.angularjs.org/1.2.16/angular.min.js"></script>
<script src="http://id.dokdokter.com/assets/builds/doctorDashboard-5a8315878b4d73e123d68e47f9ae5958.js"></script>
<section class='maincontent clearfix dashboard'>
<div class='row'>
<div class="small-12 columns">
<ul class="breadcrumbs">
 
<li><a href="/id/patient/dashboard/profile">sikadal486 </a></li>
<li class="current"><a href="#">Janji</a></li>
</ul>
</div>
<div class='small-12 medium-3 columns'>
<div class="d-panel sidenav">
<div class="doctor-image sameHeight" style="background-image: url(https://lh3.googleusercontent.com/-EYQuhnuxg8U/AAAAAAAAAAI/AAAAAAAAABE/M6EksXnSWTA/photo.jpg?sz=200);"></div>
<p class="name">sikadal486 </p>
<ul class='side-nav'>
<li class="level-2 ">
<a href="/id/patient/dashboard/profile">Profil Saya</a>
</li>
<li class="level-2  active ">
<a href="/id/patient/dashboard/patient-appointments">Pertemuan saya</a>
</li>
</ul>
</div>
</div>
<div class='small-12 medium-9 columns'>
<div class="d-panel d-content">
<div ng-app="patientAppointmentsApp" ng-controller="patientAppointmentsCtrl" ng-class="{loading: loading}">
<h3>Atur pertemuan anda</h3>
<p>Anda bisa membuat review tentang pertemuan dengan dokter.</p>
<div class="row p-appointment" ng-repeat="appointment in appointments">
<div class="medium-9 small-12 columns">
<p class="a-doctor">
<a target="_blank" href="/id/doctors/<%appointment.doctor.user.slug%>"><%appointment.doctor.title%>. <%appointment.doctor.user.name%> <%appointment.doctor.surname%></a>
				<span class="a-specialities">(<%appointment.doctor.specialities_names%>)</span>
			</p>
			<p class="a-mcenter"><i class="fi-first-aid"></i><a href="/id/medicalcenter/<%appointment.slot.medical_center.slug%>/profile"><%appointment.slot.medical_center.name%></a></p>
			<p class="a-place"><i class="fi-marker"></i><%appointment.slot.medical_center.formatted%></p>
			<p class="a-date">
				<i class="fi-calendar"></i><%appointment.slot.day%>
				<span class="a-time"><i class="fi-clock"></i><%appointment.slot.from%></span>
			</p>
		</div>
		<div class="medium-3 small-12 columns">
			<p class="status <%appointment.status%>" href=""><%appointment.status | trans:"statics"%></p>
			<a ng-if="appointment.status == 'pending'" href="" class="button tiny green" ng-click="cancel(appointment)"><i class="fi-x"></i>Batalkan</a>
			<a ng-if="appointment.status == 'completed'" href="" class="button tiny orange" ng-click="showReview(appointment)"><i class="fi-star"></i>Review</a>
		</div>
		<div class="small-12 columns" ng-if="appointment.status == 'completed'" ng-class="{hide: appointment.show_review == null || appointment.show_review == false}">
			<div class="row a-review">
				<div class="medium-3 small-12 columns">
					<p class="tag">Nilai pelayanan dokter</p>
					<angular-ratings ng-model="appointment.review.rating_manner" enabled="<% (appointment.review == null || appointment.review.id == null) && 1 || 0 %>">
				</div>
				<div class="medium-3 small-12 columns">
					<p class="tag">Nilai untuk waktu antri</p>
					<angular-ratings ng-model="appointment.review.rating_wait" enabled="<% (appointment.review == null || appointment.review.id == null) && 1 || 0 %>">
				</div>
				<div class="medium-3 small-12 columns">
					<p class="tag">Nilai dokter</p>
					<angular-ratings ng-model="appointment.review.rating_avg" enabled="<% (appointment.review == null || appointment.review.id == null) && 1 || 0 %>">
				</div>
				<div class="medium-10 small-12 columns">
					<textarea class="my-input" rows="4" ng-model="appointment.review.comment" ng-disabled="(appointment.review != null && appointment.review.id != null)"></textarea>
				</div>
				<div class="medium-2 small-12 columns">
					<button class="button green expand" ng-click="sendReview(appointment)" ng-disabled="(appointment.review != null && appointment.review.id != null)">Kirim</button>
				</div>
			</div>
		</div>
	</div>

</div>

<script>

var patientAppointmentsApp = angular.module('patientAppointmentsApp', ['appointmentService', 'ratings', 'chhFilters'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

angular.module('appointmentService', [])

    .factory('Appointment', function($http) {
        return {
            get : function() {
                return $http.get('/patient/sikadal486/appointments');
            },
            cancel: function(id) {
            	return $http({
                    method: 'POST',
                    url: '/patient/sikadal486/cancel-appointment',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param({appointment_id: id})
                });
            },
            sendReview: function(appointment) {
            	return $http({
                    method: 'POST',
                    url: '/patient/sikadal486/review-appointment',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param({	appointment_id: appointment.id,
                    				wait: appointment.review.rating_wait,
                    				manner: appointment.review.rating_manner,
                    				avg: appointment.review.rating_avg,
                    				comment: appointment.review.comment })
                });
            }
        }
    });

patientAppointmentsApp.controller('patientAppointmentsCtrl', function($scope, $http, Appointment) {

	$scope.appointments = [];
    $scope.loading = true;

    $scope.getAppointments = function(){
        Appointment.get()
            .success(function(data) {
                $scope.appointments = data.appointments;
                $scope.loading = false;
                setTimeout(stickyFooter, 0);
                console.log("hola");
        	})
        	.error(function(data) {
        		console.log(data);
        	});
    }

    $scope.cancel = function(appointment) {
    	var a = confirm('Anda yakin mau membatalkan janji pertemuan ini?')
      	if (a) {
            $scope.loading = true;
	    	Appointment.cancel(appointment.id)
	            .success(function(data) {
	            	appointment.status = 'cancelled';
                    $scope.loading = false;
	        	})
	        	.error(function(data) {
	        		console.log(data);
	        	});
		}
    }

    $scope.showReview = function(appointment) {
    	if (appointment.show_review == null) {
    		appointment.show_review = true;
    	} else {
    		appointment.show_review = !appointment.show_review;
    	}
    }

    $scope.sendReview = function(appointment) {
        $scope.loading = true;
    	Appointment.sendReview(appointment)
    		.success(function(data) {
    			appointment.review = data.review;
                $scope.loading = false;
    		})
    		.error(function(data) {
    			console.log(data);
    		});
    }

    $scope.getAppointments();

});
</script>			</div>
		</div>
	</div>
</section>


<footer id="chh-footer">
<div class="chh-bottom">
<div class="chh-row">
    
<div class="copyright">
<p>Copyright &copy; Kelompok 5</p>
</div>
</div>
</div>
</footer>

<script src="//use.typekit.net/gkc1vhr.js"></script>
<script src="http://id.dokdokter.com/assets/builds/master-3a27568b93242798cbe2502d31879fc3.js"></script>
<script src="http://id.dokdokter.com/js-localization/localization.js"></script>
<script type="text/javascript" src="http://id.dokdokter.com/js-localization/messages"></script>
<script src="http://id.dokdokter.com/assets/builds/chhFooter-8ddfd0220a7f85d1b78633fa60258b4d.js"></script> <script src="http://id.dokdokter.com/assets/builds/geocomplete-be0492b5f865c4dc46865fd47091b242.js"></script>
 
 

<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-46492109-19', 'auto');
         ga('send', 'pageview');

    </script>
</body>
</html>