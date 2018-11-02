<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<input type="hidden" id="login" name="LOGIN" value="<? echo $arResult["arUser"]["LOGIN"]?>">

<h3 class="form-title">Изменение пароля</h3>
<div class="form-box">
    <div class="row">
        <div class="col-md-7 col-sm-9">
            <?if($arResult["arUser"]["EXTERNAL_AUTH_ID"] == ''):?>
            <div class="row form-group">
                <div class="col-sm-5">
                    <span class="input-title"><?=GetMessage('NEW_PASSWORD_REQ')?></span>
                </div>
                <div class="col-sm-7">
                    <input type="password" class="text-input" name="NEW_PASSWORD" value="" autocomplete="off" placeholder="<?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-5">
                    <span class="input-title"><?=GetMessage('NEW_PASSWORD_CONFIRM')?></span>
                </div>
                <div class="col-sm-7">
                    <input type="password" class="text-input" name="NEW_PASSWORD_CONFIRM" value="" autocomplete="off">
                </div>
            </div>
            <?endif?>
            <div class="wrapper-submit-btn mod limed-spruce-btn">
                <span class="arrow"></span>
                <input type="submit" class="submit-btn" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>">
            </div>
        </div>
    </div>
</div>
<div class="form-box">
    <div class="row">
        <div class="col-md-7 col-sm-9">
            <h3 class="form-title">Контактная информация</h3>
            <div class="row form-group">
                <div class="col-sm-5">
                    <span class="input-title"><?=GetMessage('EMAIL')?></span>
                </div>
                <div class="col-sm-7">
                    <input type="email" class="text-input" onkeyup="javascript:document.getElementById('login').value = this.value" name="EMAIL" value="<? echo $arResult["arUser"]["EMAIL"]?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-5">
                    <span class="input-title"><?=GetMessage('NAME')?></span>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="text-input" name="NAME" value="<?=$arResult["arUser"]["NAME"]?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-5">
                    <span class="input-title"><?=GetMessage('USER_PHONE')?></span>
                </div>
                <div class="col-sm-7">
                    <div class="phone-text">
                        <span class="phone-number"><?=$arResult["arUser"]["PERSONAL_PHONE"]?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="row form-group last">
                <div class="col-md-3 col-sm-4">
                    <span class="input-title">Новый телефон:</span>
                </div>
                <div class="col-md-4 col-sm-5 col-sm-mod">
                    <input type="tel" class="text-input" name="PERSONAL_PHONE">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-13">
        <h3 class="form-title">Почтовые уведомления</h3>
        <label class="wrapper-checkbox">
            <input name="checkbox" value="" type="checkbox" checked>
										<span class="text">
											Присылать уведомления
										</span>
        </label>
    </div>
</div>