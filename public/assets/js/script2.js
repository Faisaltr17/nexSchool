/* jquery-multifield - v2.0.0 - https://github.com/maxkostinevich/jquery-multifield */
!function(a,b,c,d){
    var e=function(b,c){
        this.elem=b,
        this.$elem=a(b),
        this.options=c,
        this.localize_i18n={
            multiField:{
                messages:{
                    removeConfirmation:"Are you sure you want to remove this section?"}
                }
            },
        this.metadata=this.$elem.data("mfield-options")
    };
    e.prototype={
        defaults:{
            max:0,
            locale:"default"
        },
        init:function(){
            var b=this;
            return this.config=a.extend({

            },
            this.defaults,
            this.options,
            this.metadata),
            "default"!==this.config.locale&&(b.localize_i18n=this.config.locale),
            this.getSectionsCount()<2&&a(this.config.btnRemove,this.$elem).hide(),
            this.$elem.on("click",this.config.btnAdd,function(a){
                a.preventDefault(),b.cloneSection()
            }),
            this.$elem.on("click",this.config.btnRemove,function(c){
                c.preventDefault();
                var d=a(c.target.closest(b.config.section));
                b.removeSection(d)
            }),
            this
        },
        cloneSection:function(){
            if(0!==this.config.max&&this.getSectionsCount()+1>this.config.max)
            return!1;
            var b=a(this.config.section,this.$elem).last().clone().attr("style","").attr("id","").fadeIn("fast");
            a('input[type!="radio"],textarea',b).each(function(){
                a(this).val("")
            }),
            b.find('input[type="radio"]').each(function(){
                var b=a(this).attr("name");
                a(this).attr("name",b.replace(/([0-9]+)/g,1*b.match(/([0-9]+)/g)+1))
            }),
            a("input[type=radio]",b).attr("checked",!1),a("img.reset-image-src",b).each(function(){
                a(this).attr("src","")
            }),
            this.$elem.append(b),a(this.config.btnRemove,this.$elem).show()
        },
        removeSection:function(b){
            if(confirm(this.localize_i18n.multiField.messages.removeConfirmation)){
                var c=this.getSectionsCount();
                c<=2&&a(this.config.btnRemove,this.$elem).hide(),
                b.slideUp("fast",function(){a(this).detach()
                })
            }
        },
        getSectionsCount:function(){
            return this.$elem.children(this.config.section).length
        }
    },
    e.defaults=e.prototype.defaults,a.fn.multifield=function(a){
        return this.each(function(){
            new e(this,a).init()
        })
    }
}
(jQuery,window,document);
