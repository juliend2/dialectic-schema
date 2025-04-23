# README

A [JSON-Schema](https://json-schema.org) for formalizing dialogue of arguments and counter-arguments.

## The Schema

See [dialectic-schema.json](./dialectic-schema.json)

## An example

```json
{
    "argument": "Video games are a waste of time and have no benefits.",
    "counter-arguments": [
        {
            "argument": "Studies show that video games can improve problem-solving, spatial reasoning, and reaction time."
        },
        {
            "argument": "Many games promote teamwork, communication, and social bonding — especially in online multiplayer environments."
        },
        {
            "argument": "Gaming can provide stress relief and a safe emotional outlet for many people."
        }
    ]
}
```

## Validating a JSON

This repo also comes with a validator, in the form of a PHP script. Here's how
to use it.

```
# Install the validator:
composer install

# Use the validator:
php validator.php <some json file path>
```
