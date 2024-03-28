function slideVertical(option) {
    var width = 0;
    var current = 0;
    var that = this;
    var ele = document.querySelector(option.id);
    var page = document.querySelector(option.ele+' '+option.page);

    this.btnUp = document.querySelector(option.ele+' '+option.btnUp);
    this.btnDown = document.querySelector(option.ele+' '+option.btnDown);
    this.widthNext = option.widthNext;
    this.widthEnd = option.widthEnd;

    this.btnUp.addEventListener('click', function(){
        that.up();
    })

    this.btnDown.addEventListener('click', function(){
        that.down();
    })

    this.up = function() {
        if (width == this.widthEnd) {
            current--;
            width = this.widthNext*current;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
        else if (this.widthNext*(current-1) < 0) {
            current--;
            width = this.widthNext*current;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
        else if (this.widthNext*(current-1) == 0) {
            current--;
            width = 0;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
    }

    this.down = function() {
        if (width == 0) {
            current++;
            width = this.widthNext;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
        else if (this.widthNext*(current+1) >= this.widthEnd) {
            current++;
            width = this.widthNext*current;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
        else {
            width = this.widthEnd;
            ele.style.transform  = 'translateY('+width+'px)';
            page.innerHTML = (current+1)+'/5';
        }
    }
}