function show(option) {
    var day = document.querySelector(option.id+' '+option.day);
    var month = document.querySelector(option.id+' '+option.month);
    var year = document.querySelector(option.id+' '+option.year);
    var now = new Date();

    //console.log(day, month, year, now);

    this.showDay = function() {  
        for (let i = 1; i <= 31; i++) {
            day.innerHTML += '<option value='+i+'>'+i+'</option>'
        }

        day.value = now.getDate();
    }
    
    this.showMonth = function() {
        for (let i = 1; i <= 12; i++) {
            month.innerHTML += '<option value='+i+'>Tháng '+i+'</option>'
        }
    
        month.value = now.getMonth()+1;
    }
    
    this.showYear = function() {
        for (let i = now.getFullYear(); i >= 1900; i--) {
            year.innerHTML += '<option value='+i+'>'+i+'</option>'
        }
    }
}
