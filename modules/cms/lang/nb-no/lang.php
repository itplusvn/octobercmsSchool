<?php

return [
    'cms_object' => [
        'invalid_file' => 'Ugyldig filnavn: :name. Filnavn kan kun inneholde alfanumeriske tegn, understrek, bindestrek og punktum. Eksempel: about-us.htm, page, subdirectory/page',
        'invalid_property' => "Egenskapen ':name' kan ikke settes",
        'file_already_exists' => "Filen ':name' eksisterer allerede.",
        'error_saving' => "Kunne ikke lagre filen ':name'. Vennligst sjekk skriverettigheter på serveren.",
        'error_creating_directory' => 'Kunne ikke opprette mappen :name. Vennligst sjekk skriverettigheter på serveren.',
        'invalid_file_extension' => 'Ugyldig filtype: :invalid. Tillatte filtyper er: :allowed.',
        'error_deleting' => "Kunne ikke slette filen ':name'. Vennligst sjekk skriverettigheter på serveren.",
        'delete_success' => 'Templates som ble slettet: :count.',
        'file_name_required' => 'Filnavnfeltet er obligatorisk.',
        'safe_mode_enabled' => 'Sikkert modus er aktivert.',
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Website',
            'online' => 'Online',
            'maintenance' => 'Vedlikeholdsmodus',
            'manage_themes' => 'Administrer temaer',
        ]
    ],
    'theme' => [
        'not_found_name' => "Tema ':name' ble ikke funnet.",
        'active' => [
            'not_set' => 'Aktivt tema er ikke valgt.',
            'not_found' => 'Aktivt tema ikke funnet.'
        ],
        'edit' => [
            'not_set' => 'Redigeringstema er ikke valgt.',
            'not_found' => 'Redigeringstema ikke funnet.',
            'not_match' => "Objektet du prøver å åpne tilhører ikke temaet som endres. Vennligst oppdater siden."
        ],
        'settings_menu' => 'Frontend tema',
        'settings_menu_description' => 'Forhåndsvis en liste over installerte temaer og velg et aktivt tema.',
        'default_tab' => 'Egenskaper',
        'name_label' => 'Navn',
        'name_create_placeholder' => 'Temanavn',
        'author_label' => 'Forfatter',
        'author_placeholder' => 'Person eller bedrift',
        'description_label' => 'Beskrivelse',
        'description_placeholder' => 'Temabeskrivelse',
        'homepage_label' => 'Hjemmeside',
        'homepage_placeholder' => 'Nettside-URL',
        'code_label' => 'Kode',
        'code_placeholder' => 'En unik kode som brukes for distribusjon',
        'dir_name_label' => 'Mappenavn',
        'dir_name_create_label' => 'Temaets mappenavn',
        'theme_label' => 'Tema',
        'theme_title' => 'Temaer',
        'activate_button' => 'Aktivér',
        'active_button' => 'Aktivér',
        'customize_theme' => 'Tilpass tema',
        'customize_button' => 'Tilpass',
        'duplicate_button' => 'Duplisér',
        'duplicate_title' => 'Duplisér tema',
        'duplicate_theme_success' => 'Temaet har blitt duplisert!',
        'manage_button' => 'Administrer',
        'manage_title' => 'Administrer tema',
        'edit_properties_title' => 'Tema',
        'edit_properties_button' => 'Endre egenskaper',
        'save_properties' => 'Lagre egenskaper',
        'import_button' => 'Importér',
        'import_title' => 'Importér tema',
        'import_theme_success' => 'Temaet har blitt importert!',
        'import_uploaded_file' => 'Temaets arkivfil',
        'import_overwrite_label' => 'Overskriv eksisterende filer',
        'import_overwrite_comment' => 'Fjern kryss for å kun importere nye filer',
        'import_folders_label' => 'Mapper',
        'import_folders_comment' => 'Vennligst velg mappene du vil importere',
        'export_button' => 'Eksportér',
        'export_title' => 'Eksportér tema',
        'export_folders_label' => 'Mapper',
        'export_folders_comment' => 'Vennligst velg mappene du vil eksportere',
        'delete_button' => 'Slett',
        'delete_confirm' => 'Vil du virkelig slette dette temaet? Handlingen kan ikke angres!',
        'delete_active_theme_failed' => 'Kan ikke slette det aktive temaet. Gjør et annet tema aktivt først.',
        'delete_theme_success' => 'Temaet har blitt slettet!',
        'create_title' => 'Opprett tema',
        'create_button' => 'Opprett',
        'create_new_blank_theme' => 'Lag et nytt blankt tema',
        'create_theme_success' => 'Temaet har blitt opprettet!',
        'create_theme_required_name' => 'Vennligst gi temaet et navn.',
        'new_directory_name_label' => 'Temamappe',
        'new_directory_name_comment' => 'Oppgi en ny mappe for det dupliserte temaet.',
        'dir_name_invalid' => 'Navnet kan kun inneholde tall, latinske bokstaver og følgende symbol: _-',
        'dir_name_taken' => 'Temamappen eksiterer allerede.',
        'find_more_themes' => 'Finn flere temaer på OctoberCMS Theme Marketplace',
        'saving' => 'Lagrer tema...',
        'return' => 'Tilbake til temaliste',
    ],
    'maintenance' => [
        'settings_menu' => 'Vedlikeholdsmodus',
        'settings_menu_description' => 'Konfigurer vedlikeholdsmodussiden og endre innstillinger.',
        'is_enabled' => 'Aktivér vedlikeholdsmodus',
        'is_enabled_comment' => 'Når aktivert, vil besøkende se følgende side:',
        'hint' => 'Vedlikeholdsmodus vil vise vedlikehodsmodussiden til besøkende som ikke er logget inn.',
    ],
    'page' => [
        'not_found_name' => "Siden ':name' ble ikke funnet",
        'not_found' => [
            'label' => 'Side ikke funnet',
            'help' => 'Den forespurte siden ble ikke funnet.'
        ],
        'custom_error' => [
            'label' => 'Side-feil',
            'help' => "Noe gikk galt. Siden kan ikke vises."
        ],
        'menu_label' => 'Sider',
        'unsaved_label' => 'Ulagrede sider',
        'no_list_records' => 'Ingen sider funnet',
        'new' => 'Ny side',
        'invalid_url' => 'Ugyldig URL-format. URL-en skal starte med skråstrek og kan inneholde tall, latinske bokstaver og følgende symbol: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Vil du virkelig slette valgte sider?',
        'delete_confirm_single' => 'Vil du virkelig slette denne siden?',
        'no_layout' => '-- ingen layout --'
    ],
    'layout' => [
        'not_found_name' => "Layouten ':name' ble ikke funnet",
        'menu_label' => 'Layouts',
        'unsaved_label' => 'Ulagrede layouts',
        'no_list_records' => 'Ingen layouts funnet',
        'new' => 'Ny layout',
        'delete_confirm_multiple' => 'Vil du virkelig slette valgte layouts?',
        'delete_confirm_single' => 'Vil du virkelig slette denne layout?'
    ],
    'partial' => [
        'not_found_name' => "Partial ':name' ble ikke funnet.",
        'invalid_name' => 'Ugyldig partial navn: :name.',
        'menu_label' => 'Partials',
        'unsaved_label' => 'Ulagrede partials',
        'no_list_records' => 'Ingen partials funnet',
        'delete_confirm_multiple' => 'Vil du virkelig slette valgte partials?',
        'delete_confirm_single' => 'Vil du virkelig slette denne partialen?',
        'new' => 'Ny partial'
    ],
    'content' => [
        'not_found_name' => "Innholdsfilen ':name' ble ikke funnet.",
        'menu_label' => 'Innhold',
        'unsaved_label' => 'Ulagret innhold',
        'no_list_records' => 'No content files found',
        'delete_confirm_multiple' => 'Vil du virkelig slette valgte innholdsfiler eller -mapper?',
        'delete_confirm_single' => 'Vil du virkelig slette denne innholdsfilen eller -mappen?',
        'new' => 'Ny innholdsfil'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Ugyldig AJAX handler navn: :name.',
        'not_found' => "AJAX handler ':name' ble ikke funnet."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Legg til',
        'search' => 'Søk...'
    ],
    'editor' => [
        'settings' => 'Innstillinger',
        'title' => 'Tittel',
        'new_title' => 'Ny side tittel',
        'url' => 'URL',
        'filename' => 'Filnavn',
        'layout' => 'Layout',
        'description' => 'Beskrivelse',
        'preview' => 'Forhåndsvis',
        'meta' => 'Meta',
        'meta_title' => 'Meta-tittel',
        'meta_description' => 'Meta-beskrivelse',
        'markup' => 'Markup',
        'code' => 'Kode',
        'content' => 'Innhold',
        'hidden' => 'Skjult',
        'hidden_comment' => 'Kun backend-brukere har tilgang til skjulte sider.',
        'enter_fullscreen' => 'Fullskjermmodus',
        'exit_fullscreen' => 'Avslutt fullskjermmodus',
        'open_searchbox' => 'Vis søkefelt',
        'close_searchbox'  => 'Skjul søkefelt',
        'open_replacebox' => 'Vis erstatt-felt',
        'close_replacebox'  => 'Skjul erstatt-felt'
    ],
    'asset' => [
        'menu_label' => 'Ressurser',
        'unsaved_label' => 'Ulagrede ressurser',
        'drop_down_add_title' => 'Legg til...',
        'drop_down_operation_title' => 'Handling...',
        'upload_files' => 'Last opp fil(er)',
        'create_file' => 'Opprett fil',
        'create_directory' => 'Opprett mappe',
        'directory_popup_title' => 'Ny mappe',
        'directory_name' => 'Mappenavn',
        'rename' => 'Nytt navn',
        'delete' => 'Slett',
        'move' => 'Flytt',
        'select' => 'Velg',
        'new' => 'Ny fil',
        'rename_popup_title' => 'Nytt navn',
        'rename_new_name' => 'Nytt navn',
        'invalid_path' => 'Mappestien kan kun inneholde tall, latinske bokstaver, mellomrom og følgende symbol: ._-/',
        'error_deleting_file' => 'Kunne ikke slette :name.',
        'error_deleting_dir_not_empty' => 'Kunne ikke slette :name. Mappen er ikke tom.',
        'error_deleting_dir' => 'Kunne ikke slette :name.',
        'invalid_name' => 'Navnet kan kun inneholde tall, latinske bokstaver, mellomrom og følgende symbol: ._-',
        'original_not_found' => 'Original fil eller mappe ikke funnet',
        'already_exists' => 'Fil eller mappe med samme navn eksiterer allerede',
        'error_renaming' => 'Kunne ikke gi filen eller mappen nytt navn',
        'name_cant_be_empty' => 'Navnet kan ikke være tomt',
        'too_large' => 'Opplastet fil er for stor. Maksimum filstørrelse er :max_size',
        'type_not_allowed' => 'Kun følgende filtyper er tillat: :allowed_types',
        'file_not_valid' => 'Filen er ugyldig',
        'error_uploading_file' => "Kunne ikke laste opp filen ':name': :error",
        'move_please_select' => 'velg',
        'move_destination' => 'Målmappe',
        'move_popup_title' => 'Flytt ressurser',
        'move_button' => 'Flytt',
        'selected_files_not_found' => 'Valgte filer ikke funnet',
        'select_destination_dir' => 'Vennligst velg en målmappe',
        'destination_not_found' => 'Målmappe ikke funnet',
        'error_moving_file' => 'Kunne ikke flytte filen :file',
        'error_moving_directory' => 'Kunne ikke flytte mappen :dir',
        'error_deleting_directory' => 'Kunne ikke slette original mappe :dir',
        'path' => 'Mål'
    ],
    'component' => [
        'menu_label' => 'Komponenter',
        'unnamed' => 'Navnløs',
        'no_description' => 'Ingen beskrivelse spesifisert',
        'alias' => 'Alias',
        'alias_description' => 'Et unikt navn gitt til komponenten for å benytte den i sider og layouts.',
        'validation_message' => 'Komponentaliaser kan kun inneholde latinske symboler, tall og understreker. Aliaser skal starte med et latinsk symbol.',
        'invalid_request' => 'Templaten kan ikke lagres på grunn av ugyldig komponentdata.',
        'no_records' => 'Ingen komponenter funnet',
        'not_found' => "Komponenten ':name' ble ikke funnet.",
        'method_not_found' => "Komponenten ':name' inneholder ikke en metode ':method'."
    ],
    'template' => [
        'invalid_type' => 'Ukjent template-type.',
        'not_found' => 'Forespurt template ikke funnet.',
        'saved' => 'Templaten har blitt lagret.'
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Administrer innholdsfiler',
        'manage_assets' => 'Administrer ressurser',
        'manage_pages' => 'Administrer sider',
        'manage_layouts' => 'Administrer layouts',
        'manage_partials' => 'Administrer partials',
        'manage_themes' => 'Administrer maler',
        'manage_media' => 'Last opp og behandle media - bilder, video, lydfiler, dokumenter',
    ],
    'mediafinder' => [
        'default_prompt' => 'Klikk på %s knappen for å hente media'
    ],
    'media' => [
        'invalid_path' => "Ugyldig filsti: ':path'.",
        'menu_label' => 'Media',
        'upload' => 'Last opp',
        'move' => 'Flytt',
        'delete' => 'Slett',
        'add_folder' => 'Ny mappe',
        'search' => 'Søk',
        'display' => 'Vis',
        'filter_everything' => 'Alle filer',
        'filter_images' => 'Bilder',
        'filter_video' => 'Video',
        'filter_audio' => 'Lyd',
        'filter_documents' => 'Dokumenter',
        'library' => 'Bibliotek',
        'folder_size_items' => 'fil(er)',
        'size' => 'Størrelse',
        'title' => 'Tittel',
        'last_modified' => 'Sist endret',
        'public_url' => 'URL',
        'click_here' => 'Klikk her',
        'thumbnail_error' => 'Kunne ikke lage thumbnail.',
        'return_to_parent' => 'Gå til forrige mappe',
        'return_to_parent_label' => 'Gå opp ..',
        'nothing_selected' => 'Ingenting er valgt.',
        'multiple_selected' => 'Flere filer er valgt.',
        'uploading_file_num' => 'Laster opp :number fil(er)...',
        'uploading_complete' => 'Opplasting fullført',
        'uploading_error' => 'Opplasting feilet',
        'type_blocked' => 'Filtypen er blokkert av sikkerhetsgrunner.',
        'order_by' => 'Sorter etter',
        'folder' => 'Mappe',
        'no_files_found' => 'Ingen filer ble funnet.',
        'delete_empty' => 'Ingen filer er valgt.',
        'delete_confirm' => 'Vil du virkelig slette valgte fil(er)?',
        'error_renaming_file' => 'Kunne ikke gi filen nytt navn.',
        'new_folder_title' => 'Ny mappe',
        'folder_name' => 'Mappenavn',
        'error_creating_folder' => 'Kunne ikke opprette ny mappe',
        'folder_or_file_exist' => 'En fil eller mappe med det navnet eksisterer allerede.',
        'move_empty' => 'Vennligst velg filer å flytte.',
        'move_popup_title' => 'Flytt filer eller mapper',
        'move_destination' => 'Målmappe',
        'please_select_move_dest' => 'Vennligst velg en målmappe.',
        'move_dest_src_match' => 'Please select another destination folder.',
        'empty_library' => 'Mediabiblioteket er tomt. Last opp filer eller opprett mapper for å komme i gang.',
        'insert' => 'Insert',
        'crop_and_insert' => 'Crop & Insert',
        'select_single_image' => 'Vennligst velg ett enkelt bilde.',
        'selection_not_image' => 'Valgte fil er ikke et bilde.',
        'restore' => 'Angre endringer',
        'resize' => 'Endre størrelse...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Fast forhold',
        'selection_mode_fixed_size' => 'Fast størrelse',
        'height' => 'Høyde',
        'width' => 'Bredde',
        'selection_mode' => 'Valgmodus',
        'resize_image' => 'Endre bildestørrelse',
        'image_size' => 'Bildestørrelse:',
        'selected_size' => 'Valgt:'
    ]
];
