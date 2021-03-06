<div id="master-container">
    <div id="form-container">
        <div class="container" id="tabs-container">
            <div class="left-col" id="toolbox-col" style="padding-top: 18px">
                <ul class="nav-tabs" role="tablist">
                    <li class="active toolbox-tab" data-target="#add-field">Add a Field</li>
                    <li class="toolbox-tab" data-target="#field-settings">Field Settings</li>
                    <li class="toolbox-tab" data-target="#form-settings">Form Settings</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" style="padding: 20px;" id="add-field">
                        <div class="col-sm-6">
                            <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-single-line-text">Text Field</a>
                            <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-paragraph-text">Paragraph Text</a>
                            <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-multiple-choice">Radio Button</a>
                        </div>
                        <div class="col-sm-6">
                            <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-number">Number</a>
                            <!-- <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-checkboxes">Checkboxes</a> -->
                            <a href = "#save" class="button new-element waves-effect waves-light btn smoothScroll btn-field" data-type="element-dropdown">Dropdown</a>
                            <!-- <a href = "#save" class="button grey new-element waves-effect waves-effectlight btn smoothScroll btn-field" data-type="element-section-break">Section Break</a>  -->  
                        </div>
                        <div style="clear:both"></div>
                    </div>
                <!-- </div> -->
                <div class="tab-pane" id="field-settings" style="padding: 20px; display: none; margin: none;">
                <div class="section">
                    <div class="form-group">
                        <label>Field Label</label>
                        <input type="text" class="form-control" id="field-label" value="Untitled" />
                    </div>
                </div>
                <div class="section" id="field-choices" style="display: none;">
                    <div class="form-group">
                        <label>Choices</label>
                    </div>
                </div>
                <div class="section" id="field-options"> 
                    <div class="form-group">
                        <label>Field Options</label>
                    </div>
                    <div class="field-options">
                        <div class="checkbox">
                            <input class="filled-in" type="checkbox" id="required">
                            <label for="required">required</label>
                        </div>
                    </div>
                </div>
                <div class="section" id="field-description"> 
                    <div class="form-group">
                        <label>Field Description</label>
                    </div>
                    <div class="field-description">
                        <textarea id="description"></textarea>
                    </div>
                </div>
                <center>
                <button id="control-remove-field" name="action" class="btn waves-effect btn-danger">Remove
                </button>
                <button style="margin-left: 1%;"id="control-add-field" name="action" class="btn waves-effect btn-primary">Add Field
                </button>
                </center>
            </div>
            <div class="tab-pane" id="form-settings" style="padding: 20px; display: none">
                <div class="section">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="bind-control form-control" data-bind="#form-title-label" id="form-title" value="" />
                    </div>
                    <!-- <div class="form-group">
                        <label>Description</label>
                        <textarea class="bind-control form-control" data-bind="#form-description-label" id="form-description"></textarea>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="right-col" id="form-col">
        <div class="loading">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-yellow-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                        </div><div class="gap-patch">
                        <div class="circle"></div>
                        </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<div style="clear: both"></div>
<div style="clear: both"></div>
<script src="../assets/js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/css/smoothscroll.js"></script>