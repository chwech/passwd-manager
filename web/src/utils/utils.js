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
    for (param of params) {
      url += `/${param}`
    }
  }
  return url
}