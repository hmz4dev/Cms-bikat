var clndr = {};

if(!window.console) {
  window.console = {
    log: function(whatever) {
      // sad face.
    }
  }
}

$( function() {
	/*
	eventsArray =  [
						    { date: '2015-04-26', title: 'This is an Event' },
    						{ date: moment().format('YYYY-MM-') + '23', title: 'Another Event' }
						];
  	*/
  // default
  // ================================================================================
  clndr.defaultSetup = $('#default').clndr();


  // test showAdjacentMonths and adjacentDaysChangeMonth.
  // edges of other months should be visible & clicking them should switch the month.
  // ================================================================================
  clndr.adjacent = $('#adjacent').clndr({
    showAdjacentMonths: true,
    adjacentDaysChangeMonth: true
  });


  // pass in a template
  // ================================================================================
  clndr.passInATemplate = $('#pass-in-a-template').clndr({
    template: $('#clndr-template').html()
  });


  // pass in events
  // ================================================================================
  clndr.passInEvents = $('#pass-in-events').clndr({
    events: eventsArray
  });

  // test the clickEvent callbacks
  // ================================================================================
  clndr.callbacks = $('#callbacks').clndr({
    ready: function() {
      console.log('the callbacks calendar just called ready().');
    },
    clickEvents: {
      click:         function(target) { console.log('click'); },
      nextMonth:     function(month)  { console.log('next month'); },
      previousMonth: function(month)  { console.log('previous month'); },
      nextYear:      function(month)  { console.log('next year'); },
      previousYear:  function(month)  { console.log('previous year'); },
      today:         function(month)  { console.log('today'); },
      onMonthChange: function(month)  { console.log('on month change'); },
      onYearChange:  function(month)  { console.log('on year change'); }
    },
    doneRendering: function() {
      console.log('the callbacks calendar just called doneRendering().');
    }
  });


  // test multi-day events
  // ================================================================================
  var multidayArray = [
    { startDate: moment().format('YYYY-MM-') + '12', endDate: moment().format('YYYY-MM-') + '17', title: 'Multi1' },
    { startDate: moment().format('YYYY-MM-') + '24', endDate: moment().format('YYYY-MM-') + '27', title: 'Multi2' }
  ];

  clndr.multiday = $('#multiday').clndr({
    events: multidayArray,
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate'
    },
    clickEvents: {
      click: function(target) {
        console.log(target);
      }
    }
  });

  // test multi-day events
  // ================================================================================
  var multidayMixedArray = [
    { startDate: moment().format('YYYY-MM-') + '12', endDate: moment().format('YYYY-MM-') + '17', title: 'Multi1' },
    { startDate: moment().format('YYYY-MM-') + '24', endDate: moment().format('YYYY-MM-') + '27', title: 'Multi2' },
    { date: moment().format('YYYY-MM-') + '19', title: 'Single' }
  ];

  clndr.multiday = $('#multiday-mixed').clndr({
    events: multidayMixedArray,
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate',
      singleDay: 'date'
    },
    clickEvents: {
      click: function(target) {
        console.log(target);
      }
    }
  });

  // test multi-day event performance
  // ================================================================================

  // Start with two truly multiday events.
  var multidayMixedPerfArray = [
    { startDate: moment().format('YYYY-MM-') + '12', endDate: moment().format('YYYY-MM-') + '17', title: 'Multi1' },
    { startDate: moment().format('YYYY-MM-') + '24', endDate: moment().format('YYYY-MM-') + '27', title: 'Multi2' },
  ];

  // Add ten events every day this month that are only a day long,
  // which triggers clndr to use a performance optimization.
  var daysInMonth = moment().daysInMonth();
  for (var i = 1; i <= daysInMonth; i++) {
    for (var j = 0; j < 10; j++) {
      multidayMixedPerfArray.push({ startDate: moment().format('YYYY-MM-') + i, endDate: moment().format('YYYY-MM-') + i });
    }
  }

  var start = moment();

  clndr.multidayMixedPerformance = $('#multiday-mixed-performance').clndr({
    events: multidayMixedPerfArray,
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate',
      singleDay: 'date'
    },
    clickEvents: {
      click: function(target) {
        console.log(target);
      }
    }
  });

$('#multiday-mixed-performance-val').text(moment.duration(moment().diff(start)).asSeconds());

  // test really long multi-day events
  // ================================================================================
  var multidayLongArray = [
    { startDate: moment().subtract(3, 'months').format('YYYY-MM-') + '12', endDate: moment().format('YYYY-MM-') + '17', title: 'Multi1' },
    { startDate: moment().format('YYYY-MM-') + '24', endDate: moment().add(4, 'months').format('YYYY-MM-') + '27', title: 'Multi2' }
  ];

  clndr.multidayLong = $('#multiday-long').clndr({
    events: multidayLongArray,
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate'
    },
    clickEvents: {
      click: function(target) {
        console.log(target);
      }
    }
  });


  // test constraints
  // (the 4th of this month to the 12th of next month)
  // ================================================================================
  clndr.constraints = $('#constraints').clndr({
    constraints: {
      startDate: moment().format('YYYY-MM-') + '04',
      endDate: moment().add(1, 'months').format('YYYY-MM-12')
    },
    clickEvents: {
      click: function(target) {
        if( !$(target.element).hasClass('inactive') ) {
          console.log('You picked a valid date.');
        } else {
          console.log('You can\'t pick that date.');
        }
      }
    }
  });


  // test the start constraint by itself (4th of this month)
  // ================================================================================
  clndr.startConstriant = $('#start-constraint').clndr({
    constraints: {
      startDate: moment().format('YYYY-MM-') + '04'
    }
  });


  // test the end constraint by itself (12th of next month)
  // ================================================================================
  clndr.endConstriant = $('#end-constraint').clndr({
    constraints: {
      endDate: moment().add(1, 'months').format('YYYY-MM-') + '12'
    }
  });


  // test api
  // (you could do this with any instance but this makes for a nice reminder)
  // ================================================================================
  clndr.api = $('#api').clndr({
    clickEvents: {
      onMonthChange: function(month) {
        console.log('onMonthChange was called.');
      },
      onYearChange: function(month) {
        console.log('onYearChange was called.');
      }
    }
  });


  // test forceSixRows option
  // ================================================================================
  clndr.sixRows = $('#six-rows').clndr({
    forceSixRows: true
  });

  // test options.classes
  // ================================================================================
  clndr.customClasses = $('#custom-classes').clndr({
    events: eventsArray,
    classes: {
      today: "my-today",
      event: "my-event",
      past: "my-past",
      lastMonth: "my-last-month",
      nextMonth: "my-next-month",
      adjacentMonth: "my-adjacent-month",
      inactive: "my-inactive"
    },
    clickEvents: {
      click: function(target) {
		  var myDate1 = target.date._i;
		  myDate1 = myDate1.split('-'); 
		  var date  = myDate1[2];
		  var month = myDate1[1];
		  var year  = myDate1[0];
		  var selectedDate = new Date(month+"/"+date+"/"+year).getTime()/1000;
		  var todayDate = new Date();
		  var today = new Date(todayDate.getMonth()+1+"/"+todayDate.getDate()+"/"+todayDate.getFullYear()).getTime()/1000;
		  if(selectedDate < today){
			alert('You cannot mark past days as unavailable.');	 
		  } else {
				set_room_availability(target.date._i, selectedDate);	 
		  }
		
	  }
    }
  });


});
