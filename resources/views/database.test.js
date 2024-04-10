// Importar las funciones que deseas probar
const { guardarUsuario, actualizarUsuario } = require('./database-functions');

// Importar el framework de pruebas unitarias (Jest en este caso)
const { expect } = require('@jest/globals');

// Definir las pruebas unitarias
describe('Operaciones de escritura en la base de datos', () => {
    it('Debería guardar un nuevo usuario en la base de datos', async () => {
        // Llamar a la función para guardar un nuevo usuario
        const newUser = await guardarUsuario({ nombre: 'Ejemplo', email: 'ejemplo@example.com' });

        // Verificar que el usuario se haya guardado correctamente
        expect(newUser).toBeDefined();
        expect(newUser.nombre).toBe('Ejemplo');
        expect(newUser.email).toBe('ejemplo@example.com');
    });

    it('Debería actualizar el nombre de un usuario existente en la base de datos', async () => {
        // Llamar a la función para actualizar el nombre de un usuario existente
        const updatedUser = await actualizarUsuario(1, { nombre: 'Nuevo Nombre' });

        // Verificar que el usuario se haya actualizado correctamente
        expect(updatedUser).toBeDefined();
        expect(updatedUser.id).toBe(1);
        expect(updatedUser.nombre).toBe('Nuevo Nombre');
    });

    // Agregar más pruebas según sea necesario para cubrir todas las operaciones de escritura
});
