//BAGIAN FORMULIR TABS

$(document).ready(function() {
  $('.btnNext').click(function() {
    $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
  });

  $('.btnPrevious').click(function() {
    $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
  });
});


//BAGIAN FORMULIR PENGHARGAAN
$(document).ready(function() {
	var max_fields      = 5; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text"  class="form-control" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});


//BAGIAN HASIL SEARCH
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

/**
 * jQuery Multifield plugin
 *
 * https://github.com/maxkostinevich/jquery-multifield
 */


// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

	/*
	 * Plugin Options
	 * section (string) -  selector of the section which is located inside of the parent wrapper
	 * max (int) - Maximum sections
	 * btnAdd (string) - selector of the "Add section" button - can be located everywhere on the page
	 * btnRemove (string) - selector of the "Remove section" button - should be located INSIDE of the "section"
	 * locale (string) - language to use, default is english
	 */

	// our plugin constructor
	var multiField = function( elem, options ){
		this.elem = elem;
		this.$elem = $(elem);
		this.options = options;
		// Localization
		this.localize_i18n={
        "multiField": {
          "messages": {
            "removeConfirmation": "Are you sure you want to remove this section?"
          }
        }
      };

		// This next line takes advantage of HTML5 data attributes
		// to support customization of the plugin on a per-element
		// basis. For example,
		// <div class=item' data-mfield-options='{"section":".group"}'></div>
		this.metadata = this.$elem.data( 'mfield-options' );
	};

	// the plugin prototype
	multiField.prototype = {

		defaults: {
			max: 0,
			locale: 'default'
		},
		

		init: function() {
			var $this = this; //Plugin object
			// Introduce defaults that can be extended either
			// globally or using an object literal.
			this.config = $.extend({}, this.defaults, this.options,
				this.metadata);

			// Load localization object
      if(this.config.locale !== 'default'){
  			$this.localize_i18n = this.config.locale;
      }

			// Hide 'Remove' buttons if only one section exists
			if(this.getSectionsCount()<2) {
				$(this.config.btnRemove, this.$elem).hide();
			}

			// Add section
			this.$elem.on('click',this.config.btnAdd,function(e){
				e.preventDefault();
				$this.cloneSection();
			});

			// Remove section
			this.$elem.on('click',this.config.btnRemove,function(e){
				e.preventDefault();
				var currentSection=$(e.target.closest($this.config.section));
				$this.removeSection(currentSection);
			});

			return this;
		},


		/*
		 * Add new section
		 */
		cloneSection : function() {
			// Allow to add only allowed max count of sections
			if((this.config.max!==0)&&(this.getSectionsCount()+1)>this.config.max){
				return false;
			}

			// Clone last section
			var newChild = $(this.config.section, this.$elem).last().clone().attr('style', '').attr('id', '').fadeIn('fast');


			// Clear input values
			$('input[type!="radio"],textarea', newChild).each(function () {
				$(this).val('');
			});

			// Fix radio buttons: update name [i] to [i+1]
			newChild.find('input[type="radio"]').each(function(){var name=$(this).attr('name');$(this).attr('name',name.replace(/([0-9]+)/g,1*(name.match(/([0-9]+)/g))+1));});
			// Reset radio button selection
			$('input[type=radio]',newChild).attr('checked', false);

			// Clear images src with reset-image-src class
			$('img.reset-image-src', newChild).each(function () {
				$(this).attr('src', '');
			});

			// Append new section
			this.$elem.append(newChild);

			// Show 'remove' button
			$(this.config.btnRemove, this.$elem).show();
		},

		/*
		 * Remove existing section
		 */
		removeSection : function(section){
			if (confirm(this.localize_i18n.multiField.messages.removeConfirmation)){
				var sectionsCount = this.getSectionsCount();

				if(sectionsCount<=2){
					$(this.config.btnRemove,this.$elem).hide();
				}
				section.slideUp('fast', function () {$(this).detach();});
			}
		},

		/*
		 * Get sections count
		 */
		getSectionsCount: function(){
			return this.$elem.children(this.config.section).length;
		}

	};

	multiField.defaults = multiField.prototype.defaults;

	$.fn.multifield = function(options) {
		return this.each(function() {
			new multiField(this, options).init();
		});
	};



})( jQuery, window, document );