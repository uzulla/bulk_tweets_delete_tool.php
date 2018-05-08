Tweets Bulk Delete Tool
=======================

You will need this tool, when you manage some RSS bot.

- get recently tweet list.
  - (if you need to delete more old tweets, get [archive.zip](https://help.twitter.com/en/managing-your-account/how-to-download-your-twitter-archive) and create id list. )
- bulk delete tweet with tweet id list.

## install

```
$ composer install
$ cp config.php.sample config.php
$ vi config.php # fill all const
```

## get tweets list

```
$ php get_my_tweets.php > list
```

### list sample

formatted `id[tab]tweet text`.

like as ...

```
tweet id/ 999999991      tweet text / blah blah blah blah
999999992      blah blah blah blah blah blah
999999993      blah
999999994      blah blah blah blah blah
```

## filter list

Do edit list, grep, and other as you like with your favorite tools.

## delete tweets

```
$ cat edited_list | php bulk_delete.php
```

> The tool needs only id column.
