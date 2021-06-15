# A simple to use way to get your Streamlab's Cloubot Loyalty Data

There are two steps in this process.

## Part 1: Getting your data!
First log in your streamlabs account.

Go to your dashboard and notice how many pages of people show up in your loyalty, which you can see [on this page](https://streamlabs.com/dashboard#/cloudbot/loyalty/users) by hitting **next** till there is no new page.

Let's say the number is *5*. Note that down!

Now for every page you need to get it's data.
Thankfully Streamlabs has an API for that, so just visit the following page:

https://streamlabs.com/api/v5/cloudbot/loyalty?page=1
And save the data as a `.json` file.

Then go to https://streamlabs.com/api/v5/cloudbot/loyalty?page=2 and continue the process until you reach your max page.

For our example, with the 5 pages, we would open:
https://streamlabs.com/api/v5/cloudbot/loyalty?page=1
https://streamlabs.com/api/v5/cloudbot/loyalty?page=2
https://streamlabs.com/api/v5/cloudbot/loyalty?page=3
https://streamlabs.com/api/v5/cloudbot/loyalty?page=4
https://streamlabs.com/api/v5/cloudbot/loyalty?page=5

And save each with a different name ie. 1.json, 2.json etc. in the `files/` directory.

***It really doesn't matter what you name them, as long as they have a different name***

Then just run the `loyaltyToCSV.php` file and a new `loyalty.csv` should appear

That is all, enjoy!
