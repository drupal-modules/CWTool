Forms
=====

There are two main usages of forms in Drupal - altering existing forms or creating new ones. CWTool provides tool for both in similar ways.


# Altering forms

Alters for existing forms (not defined by the module) should be registered in ```hook_form_NAME_alter()``` and a static class method (```class::alter```) should add the necessary alterations.

Adding new submit or validation callbacks via CW/Util/FormUtil:

```php
class SomeExistingForm {
	public static function alter(&$form, &$form_state) {
		FormUtil::registerSubmitCallback($form, [__CLASS__, 'submit']);
	}
	
	public static function submit(&$form, &$form_state) { }
}
```


# Creating new forms

For custom forms subclass ```CW\Form\FormBuilder```:

```php
class MyForm extends CW\Form\FormBuilder {
	public static function build($form, $form_state) {
		$form['submit'] = ['#type' => 'submit', 'value' => t('Submit')];
		return $form;
	}
	
	public static function submit(&$form, &$form_state) {
		// Do some action.
	}
}

// Calling the form:
$form = MyForm::get();
$html = drupal_render($form);
```

Adding input arguments to the form can be done when instantiating the form:

```php
class PurchaseForm extends CW\Form\FormBuilder {
	public static function build($form, $form_state, $product, $buyer) {
		// ...
	}

	// ...
}

$form = PurchaseForm::get($purchasedProduct, $currentUser);
$html = drupal_render($form);
```