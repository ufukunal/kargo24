{"version":3,"file":"settings.min.js","sources":["settings.js"],"names":["BX","namespace","Filter","Settings","options","parent","this","classField","classFieldGroup","classFieldLine","classFieldDelete","classFieldLabel","classFieldWithLabel","classPresetName","classControl","classDateInput","classHide","classNumberInput","classSelect","classMultiSelect","classValueDelete","classStringInput","classAddField","classAddPresetField","classAddPresetFieldInput","classAddPresetButton","classButtonsContainer","classSaveButton","classCancelButton","classMenuItem","classMenuItemText","classMenuMultiItemText","classMenuItemChecked","classSearchContainer","classDefaultPopup","classPopupFieldList","classPopupFieldList1Column","classPopupFieldList2Column","classPopupFieldList3Column","classFieldListItem","classEditButton","classPresetEdit","classPresetNameEdit","classPresetDeleteButton","classPresetDragButton","classPresetEditButton","classPresetEditInput","classPresetOndrag","classSquare","classSquareDelete","classSquareSelected","classPresetsContainer","classPreset","classPresetCurrent","classFilterContainer","classFileldControlList","classRestoreFieldsButton","classClearSearchValueButton","classSearchButtonsContainer","classSearchButton","classDisabled","classAnimationShow","classAnimationClose","classSidebarControlsContainer","searchContainerPostfix","classPresetButtonsContainer","classFindButton","classResetButton","classDefaultFilter","classRestoreButton","classPinButton","classPopupOverlay","classPinnedPreset","classWaitButtonClass","classForAllCheckbox","classShow","classFocus","classPresetField","numberPostfix","datePostfix","toPostfix","fromPostfix","daysPostfix","monthPostfix","quarterPostfix","yearPostfix","generalTemplateId","init","prototype","getParam","mergeSettings","get","name","defaultValue","type","isFunction","isPlainObject","Object","keys","forEach","key"],"mappings":"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"}