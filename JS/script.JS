function prepareDataForDatabase(date)
{
    return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}-${date.getHours()}-${date.getMinutes()}-${date.getSeconds()}`
}

function prepareDateForDisplaying(date)
{
    return `${date.getMont() + 1}/${date.getDate()}/${date.getFullYear()}`;
}