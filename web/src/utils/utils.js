/**
 * 空函数
 */
export function noop () {}

/**
 * 拼接url, 在url后面拼参数，例如：/test  =>  /test/1
 * @export
 * @param {String} url
 * @param {Array} params
 * @returns url
 */
export function transferUrl (url, params) {
  if (Array.isArray(params)) {
    for (let param of params) {
      url += `/${param}`
    }
  }
  return url
}

/**
 * 将一个对象序列化成查询字符串
 * @export
 * @param {Object} params
 * @param {Object} [sep='&'] 键值对之间的分隔符 
 * @returns {String} 返回查询字符串，如：'?key1=value1&key2=value2'
 */
export function serializeQueryStr (params, sep = '&') {
  let queryString = '?'
  let paramsArray = []
  for (let [key, value] of Object.entries(params)) {
    paramsArray.push(`${encodeURIComponent(key)}=${encodeURIComponent(value)}`)
  }
  queryString += paramsArray.join(sep)
  return queryString
}