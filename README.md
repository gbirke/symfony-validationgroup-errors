# Symfony form validation group errors
This project demonstrates that the current (2.5.2) Symfony validation API assigns the errors to the wrong field when multiple validation groups are used.

The behavior can be disabled by using the 2.4 validation API in the validation settings:

```YAML
# config.yml
framework:
    validation:
        api: 2.4
        enable_annotations: true
```

For more reference see

- [Stackoverflow discussion](http://stackoverflow.com/questions/24150574/symfony-2-forms-with-validation-groups-errors-mapped-to-the-wrong-property/24151360)
- [Issue 11046](https://github.com/symfony/symfony/issues/11046)
- [Issue 11429](https://github.com/symfony/symfony/issues/11429)
