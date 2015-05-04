/* Icon
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.icon', {  
        init : function(ed, url) {  
            ed.addButton('icon', {  
                title : 'Add an Icon',  
                image : url+'/icon.png',
                onclick : function() {  
                    ed.selection.setContent('[icon icon="" size="default / lg / 1x / 2x / 3x / 4x / 5x" css_class=""]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('icon', tinymce.plugins.icon);  
})();


/* Teaser
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.teaser', {  
        init : function(ed, url) {  
            ed.addButton('teaser', {  
                title : 'Add Teaser',  
                image : url+'/teaser.png',  
                onclick : function() {  
                    ed.selection.setContent('[teaser type="text-box / icon-box / image-box" image="empty / image URL / image icon URL" icon="" title="This is Teaser" custom_bg_color="" custom_title_color="" custom_text_color="" custom_icon_bg_color="" custom_icon_color="" button_text="Read More" button_url="#" button_color="default / primary / success / info / warning / danger / transparent" arrow="none / left / right / bottom"]Content[/teaser]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('teaser', tinymce.plugins.teaser);  
})();


/* Row
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.row', {  
        init : function(ed, url) {  
            ed.addButton('row', {  
                title : 'Row',  
                image : url+'/row.png',  
                onclick : function() {  
                    ed.selection.setContent('[row stick_to_bottom="yes / no" css_class=""]Columns[/row]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('row', tinymce.plugins.row);
})();

/* Columns
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.column', {  
        init : function(ed, url) {  
            ed.addButton('column', {  
                title : 'Column',  
                image : url+'/column.png',
                onclick : function() {  
                    ed.selection.setContent('[column width="1/2 - 1/3 - 2/3 - 1/4 - 3/4"]Content[/column]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('column', tinymce.plugins.column);
})();

/* Staff Carousel
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.staff', {  
        init : function(ed, url) {  
            ed.addButton('staff', {  
                title : 'Staff',  
                image : url+'/staff.png',
                onclick : function() {  
                    ed.selection.setContent('[staff layout="carousel / grid" columns="2 / 3 / 4" show_only_ids=""]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('staff', tinymce.plugins.staff);
})();

/* Blog Carousel
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.blog', {  
        init : function(ed, url) {  
            ed.addButton('blog', {  
                title : 'Latest Blog Posts',
                image : url+'/blog.png',
                onclick : function() {  
                    ed.selection.setContent('[blog layout="carousel / grid" posts_limit="" columns="1 / 2 / 3 / 4"]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('blog', tinymce.plugins.blog);
})();

/* Testimonials
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.testimonials', {  
        init : function(ed, url) {  
            ed.addButton('testimonials', {  
                title : 'Testimonials',
                image : url+'/testimonial.png',
                onclick : function() {  
                    ed.selection.setContent('[testimonials layout="carousel / grid" random="yes / no" columns="1 / 2 / 3 / 4" show_only_ids=""]'); 
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('testimonials', tinymce.plugins.testimonials);
})();



/* Accordion
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.accordion', {  
        init : function(ed, url) {  
            ed.addButton('accordion', {  
                title : 'Add Accordion',  
                image : url+'/accordion.png',  
                onclick : function() {  
                     ed.selection.setContent('[accordion open_first="yes / no"]<br>[accordion-item title="First Tab Title"]Your Text[/accordion-item]<br>[accordion-item title="Second Tab Title"]Your Text[/accordion-item]<br>[accordion-item title="Third Tab Title"]Your Text[/accordion-item]<br>[/accordion]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('accordion', tinymce.plugins.accordion);  
})();


/* Tabs
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.tabs', {  
        init : function(ed, url) {  
            ed.addButton('tabs', {  
                title : 'Add Tabs',  
                image : url+'/tabs.png',  
                onclick : function() {  
                     ed.selection.setContent('[tabs tab1="First Tab Title" tab2="Second Tab Title" tab3="Third Tab Title"]<br>[tab tab_number="1"]Tab Content[/tab]<br>[tab tab_number="2"]Tab Content[/tab]<br>[tab tab_number="3"]Tab Content[/tab]<br>[/tabs]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('tabs', tinymce.plugins.tabs);  
})();


/* Pricing Table
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.pricing_table', {  
        init : function(ed, url) {  
            ed.addButton('pricing_table', {  
                title : 'Add Pricing Table',  
                image : url+'/pricing_table.png',  
                onclick : function() {  
                     ed.selection.setContent('[pricing_table title="Title" price="$99" price_description="monthly" button_text="Button" button_url="#"]<br>[item]List Item[/item]<br>[item]List Item[/item]<br>[item]List Item[/item]<br>[/pricing_table]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('pricing_table', tinymce.plugins.pricing_table);  
})();


/* Alert
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.alert', {  
        init : function(ed, url) {  
            ed.addButton('alert', {  
                title : 'Add an Alert',  
                image : url+'/alert.png',
                onclick : function() {  
                    ed.selection.setContent('[alert type="warning / success / danger / info" close_button="yes / no"]Message[/alert]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('alert', tinymce.plugins.alert);  
})();


/* Button
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.btn', {  
        init : function(ed, url) {  
            ed.addButton('btn', {  
                title : 'Add Button',  
                image : url+'/button.png',  
                onclick : function() {  
                    ed.selection.setContent('[btn color="default / primary / success / info / warning / danger / transparent" size="default / large / small" link="#" target=""]Caption[/btn]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('btn', tinymce.plugins.btn);  
})();


/* Progressbar
-------------------------------------------------------------------------------------------------------------------*/

(function() {
    tinymce.create('tinymce.plugins.progressbar', {
        init : function(ed, url) {
            ed.addButton('progressbar', {
                title : 'Add a Progressbar',
                image : url+'/progressbar.png',
                onclick : function() {
                    ed.selection.setContent('[progressbar percentage="50" color="success / info / warning / danger"]Title[/progressbar]');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('progressbar', tinymce.plugins.progressbar);
})();


/* Gallery
-------------------------------------------------------------------------------------------------------------------*/

(function() {
    tinymce.create('tinymce.plugins.gallery', {
        init : function(ed, url) {
            ed.addButton('gallery', {
                title : 'Add a Gallery',
                image : url+'/gallery.png',
                onclick : function() {
                    ed.selection.setContent('[gallery columns="2 / 3 / 4"]');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('gallery', tinymce.plugins.gallery);
})();



/* Gap / Separator / Clearfix
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.helper', {  
        init : function(ed, url) {  
            ed.addButton('helper', {  
                title : 'Add Helper',  
                image : url+'/gap_separator_clearfix.png',  
                onclick : function() {  
                     ed.selection.setContent('[helper type="gap / separator / clearfix" gap_height=""]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('helper', tinymce.plugins.helper);  
})();


/* Video
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.video', {  
        init : function(ed, url) {  
            ed.addButton('video', {  
                title : 'Add Video',  
                image : url+'/video.png',  
                onclick : function() {  
                    ed.selection.setContent('[video src="" mp4="" m4v="" webm="" ogv="" wmv="" flv="" poster="" loop="" autoplay="" preload=""]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('video', tinymce.plugins.video);  
})();


/* Audio
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.audio', {  
        init : function(ed, url) {  
            ed.addButton('audio', {  
                title : 'Add Audio',  
                image : url+'/audio.png',  
                onclick : function() {  
                    ed.selection.setContent('[audio src="" mp3="" m4a="" ogg="" wav="" wma="" loop="" autoplay="" preload=""]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('audio', tinymce.plugins.audio);  
})();


/* Embed
-------------------------------------------------------------------------------------------------------------------*/

(function() {  
    tinymce.create('tinymce.plugins.embed', {  
        init : function(ed, url) {  
            ed.addButton('embed', {  
                title : 'Add Embed',  
                image : url+'/embed.png',  
                onclick : function() {  
                    ed.selection.setContent('[embed width="auto"][/embed]');  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('embed', tinymce.plugins.embed);  
})();


/* Images
-------------------------------------------------------------------------------------------------------------------*/
/*
(function() {  
    tinymce.create('tinymce.plugins.images', {  
        init : function(ed, url) {  
            ed.addButton('images', {  
                title : 'Add Image Carousel',
                image : url+'/image_carousel.png',  
                onclick : function() {  
                    ed.selection.setContent('[images carousel_columns=""][client link="" image=""][client link="" image=""][client link="" image=""][client link="" image=""][client link="" image=""][/images]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('images', tinymce.plugins.images);
})();*/