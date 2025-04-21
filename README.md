# README

A [JSON-Schema](https://json-schema.org) for formalizing dialectics.

## The Schema

```json
{
    "type": "object",
    "properties": {
        "argument": { "type": "string" },
        "counter-arguments": {
            "type": "array",
            "items": { "$ref": "#" }
        }
    }
}
```

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
        },
    ]
}
```

## Validating a JSON

This repo also comes with a validator, in the form of a PHP script. Here's how
to use it.

```
php validator.php <some json file here>
```
