![alt tag](https://travis-ci.org/DailyMatters/redditSearch.svg?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DailyMatters/redditSearch/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DailyMatters/redditSearch/?branch=master)

## What is this?

This PHP package uses the Reddit API to do dedicated searches on every subbreddit.

This project exists because I felt the need to simplify the search in Reddit.

## Usage

You can use the class **Searcher** to create an instance of our Searcher. The *execSearch* method receives 4 parameters *subreddit, query, options and results*, where
- Subreddit is the subreddit in which to search
- Query is the term you want to search
- Options is the search option ( 'new', 'hot', 'top', 'relevance', 'comments' )
- Results is the limit of results you want to be shown ( the default value is 25 )

Results will be returned in a JSon array.

### Basic Example

To search for the last 10 posts with more comments, related to ferrari on the cars subreddit:

```php
	$search = new Searcher();
	$result = $search->execSearch( 'cars', 'ferrari', 'comments', 10 );
```

*Don't forget to include the code in your project ;)*
You can also find an example of usage under usage/usage.php

And that's it, hope you enjoy it.

## License

The MIT License (MIT)
