
var asInitValsFact = new Array();
$(document).ready(function ()
{
    //activer le lien de cette page dans le sidebar
    var url = window.location;
    $('ul.nav a[href="' + url + '"]').parent().addClass('active');
    $('ul.nav a').filter(function ()
    {
        return this.href == url;
    }).parent().addClass('active');
    $('ul.nav a').filter(function ()
    {
        return this.href == url;
    }).parent().parent().parent().collapse();

    $('a[data-confirm]').click(function (ev)
    {
        var href = $(this).attr('href');
        if (!$('#dataConfirmModal').length)
        {
            $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Merci de confirmer</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-danger" id="dataConfirmOK">Oui</a></div></div></div></div>');
        }
        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
        $('#dataConfirmOK').attr('href', href);
        $('#dataConfirmModal').modal({show: true});
        return false;
    });
    var oTable = $('#tab').dataTable({
        "language": {
            "lengthMenu": "Afficher MENU enregistrements par page",
            "zeroRecords": "Aucune donnée est sélectionnée.",
            "info": "Affichage de la page _PAGES_",
            "infoEmpty": "Aucune donnée est disponible.",
            "infoFiltered": "(Filtre de MAX enregistrements)",
            "search": "Rechercher: (Toutes les colonnes)",
            "paginate": {
                "next": "Suivant",
                "previous": "Précédent",
                "last": "Dernier",
                "first": "Premier"
            }

        },
        'iDisplayLength': 10,
        "sPaginationType": "full_numbers",
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {

                extend: 'csv',
                bSelectedOnly: true,
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;

                    if (printCounter === 1) {
                        return 'This is the first time you have printed this document.';
                    } else {
                        return 'You have printed this document ' + printCounter + ' times';
                    }
                },
                messageBottom: null
            }
        ]
    });
    $("tfoot input").keyup(function () {
        / Filter on the column based on the index of this element's parent <th> /
        oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
    });
    $("tfoot input").each(function (i) {
        asInitValsFact[i] = this.value;
    });
    $("tfoot input").focus(function () {
        if (this.className == "search_init") {
            this.className = "";
            this.value = "";
        }
    });
    $("tfoot input").blur(function (i) {
        if (this.value == "") {
            this.className = "search_init";
            this.value = asInitValsFact[$("tfoot input").index(this)];
        }
    });
    $('.sorting_asc').addClass('sorting_disabled');
    $('.sorting_asc').removeClass('sorting_asc');

    $("#tab").removeClass("no-footer");
    $('a[data-confirm]').click(function (ev) {
        var href = $(this).attr('href');
        if (!$('#dataConfirmModal').length)
        {
            $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Merci de confirmer</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-danger" id="dataConfirmOK">Oui</a></div></div></div></div>');
        }
        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
        $('#dataConfirmOK').attr('href', href);
        $('#dataConfirmModal').modal({show: true});
        return false;
    });
});
