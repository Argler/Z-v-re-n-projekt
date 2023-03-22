class Repository
{
    constructor(tableName)
    {
        this.Async = new Async();
        this.tableName = tableName;
    }
    // funkce create
    create(formdata, callBack){
        formdata.append("operation_type", "create");
        return this.#runAsync(formdata, callBack);
    }
    // funkce delete
    delete(formdata, callBack){
        formdata.append("operation_type", "delete");
        this.#runAsync(formdata, callBack)
    }

    #runAsync(formdata, callBack){
        return this.Async.performOperation(formdata, this.#formatDestination(this.tableName), callBack);
    }

    #formatDestination(str){
        var loweredStr = str.toLowerCase();
        var capitalizedFirstStr = this.#capitalizedFirstLetter(loweredStr);
        var singularStr = capitalizedFirstStr.replace(/s{1}$/, '');
        return `./endpoints/${singularStr}endpoint.php`;
    }

    #capitalizedFirstLetter(str){
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
}