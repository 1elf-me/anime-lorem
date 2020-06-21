# anime-lorem
Anime placeholder photos

## Installation

```bash
git clone https://github.com/1elf-me/anime-lorem.git
cd anime-lorem
composer install
```

### Add anime avatars

```bash
wget https://github.com/EvanBacon/anime-lorem/archive/master.zip -O storage/tmp/master.zip
unzip storage/tmp/master.zip 'anime-lorem-master/assets/*' -d storage/tmp
mv storage/tmp/anime-lorem-master/assets/*/ storage/app/
```

## How to use

After your files is published on your domain you can easily access to the image generator.

### Query examples

| Example URL                  | Query | Parameter  | Combinable | Implemented | Description                           |
|------------------------------|-------|------------|------------|-------------|---------------------------------------|
| https://example.com/         | none  | none       | yes        | yes         | Get random image from image pool      |
| https://example.com/?g       | g     | none       | yes        | yes         | Add greyscale to image                |
| https://example.com/?w=100   | w     | 100        | yes        | not yet     | Set width to 100 px                   |
| https://example.com/?h=100   | h     | 100        | yes        | not yet     | Set height to 100 px                  |

### Combining queries

| Example URL                  | Query | Parameter  | Combinable | Implemented | Description                           |
|------------------------------|-------|------------|------------|-------------|---------------------------------------|
| https://example.com/?w=100&g | w & g | 100 & none | -          | not yet     | Set width to 100 px and add greyscale |

## Attribution

This project was inspired by [EvanBacon/anime-lorem][https://github.com/EvanBacon/anime-lorem]

[https://github.com/EvanBacon/anime-lorem]: https://github.com/EvanBacon/anime-lorem

## License

MIT