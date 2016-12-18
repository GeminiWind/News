$.typeahead({
    input: '.js-typeahead-beer_v1',
    minLength: 1,
    maxItem: 15,
    order: "asc",
    hint: true,
    group: {
        template: "{{group}} beers!"
    },
    maxItemPerGroup: 5,
    backdrop: {
        "background-color": "#fff"
    },
    href: "/result-for/{{group}}/{{display}}/",
    dropdownFilter: "All",
    emptyTemplate: 'No result for "{{query}}"',
    source: {
        "Author": {
            ajax: {
                url: "/search/index",
                path: "data.all.author"
            }
        },
        "Article": {
            ajax: {
                url: "/search/index",
                path: "data.all.article"
            }
        },
        "Category": {
            ajax: {
                url: "/search/index",
                path: "data.all.category"
            }
        },
         "Tag": {
            ajax: {
                url: "/search/index",
                path: "data.all.tag"
            }
        }
    },
    callback: {
        onClickAfter: function (node, a, item, event) {
 
            event.preventDefault;
            
            /*window.open(item.href);*/
 
        }
    },
    debug: true
});