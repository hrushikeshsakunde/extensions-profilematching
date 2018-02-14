
plugin.tx_profilematching_userdetailsmanagement {
    view {
        templateRootPaths.0 = EXT:profilematching/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_profilematching_userdetailsmanagement.view.templateRootPath}
        partialRootPaths.0 = EXT:profilematching/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_profilematching_userdetailsmanagement.view.partialRootPath}
        layoutRootPaths.0 = EXT:profilematching/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_profilematching_userdetailsmanagement.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_profilematching_userdetailsmanagement.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_profilematching_userlinkinfo {
    view {
        templateRootPaths.0 = EXT:profilematching/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_profilematching_userlinkinfo.view.templateRootPath}
        partialRootPaths.0 = EXT:profilematching/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_profilematching_userlinkinfo.view.partialRootPath}
        layoutRootPaths.0 = EXT:profilematching/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_profilematching_userlinkinfo.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_profilematching_userlinkinfo.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_profilematching_userlinkmanagement {
    view {
        templateRootPaths.0 = EXT:profilematching/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_profilematching_userlinkmanagement.view.templateRootPath}
        partialRootPaths.0 = EXT:profilematching/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_profilematching_userlinkmanagement.view.partialRootPath}
        layoutRootPaths.0 = EXT:profilematching/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_profilematching_userlinkmanagement.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_profilematching_userlinkmanagement.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_profilematching._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-profilematching table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-profilematching table th {
        font-weight:bold;
    }

    .tx-profilematching table td {
        vertical-align:top;
    padding-left:2px ;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
