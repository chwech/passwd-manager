import { serializeQueryStr } from './utils'

it('serialize an object to string', () => {
  expect(serializeQueryStr({
    a: 1,
    b: 2
  })).toBe('?a=1&b=2')
})