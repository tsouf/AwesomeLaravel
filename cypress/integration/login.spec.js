import faker from 'faker'
describe('Login', () => {
  const email = faker.internet.email()
  const password = faker.internet.password()
  it('successfully registering', () => {
      cy.visit('http://laravelapp.local/register')
      cy.get('input[name=name]').type(faker.name.findName())
      cy.get('input[name=email]').type(email)
      cy.get('input[name=password]').type(password)
      cy.get('input[name=password-confirm]').type(password)
      cy.get('button').contains('Register').click()
      cy.url().should('contain', '/home')
      cy.get('#navbarDropdown').click()
      cy.contains('Logout').click()
   })
})  