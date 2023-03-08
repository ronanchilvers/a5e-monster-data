---
statblock: true
name: 'Young Shadow Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 10
ac: 17
hp: 114
hit_dice: '12d10 + 48'
speed: '40 ft., climb 40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 18
    - 14
    - 18
    - 12
    - 12
    - 18
damage_resistances: 'acid, cold, fire, lightning, thunder; damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'fatigue, frightened, grappled, paralyzed, poisoned, prone, restrained'
saves:
    - { dexterity: 6 }
    - { constitution: 8 }
    - { intelligence: 5 }
    - { wisdom: 5 }
skillsaves:
    - { deception: 8 }
    - { insight: 5 }
    - { nature: 5 }
    - { perception: 5 }
    - { stealth: 6 }
senses: 'darkvision 240 ft., passive Perception 15'
languages: 'Common, Draconic'
traits:
    0: { name: Evil, desc: 'The dragon radiates an Evil aura.' }
    1: { name: 'Incorporeal Movement', desc: 'The dragon can move through other creatures and objects. It takes 11 (2d10) force damage if it ends its turn inside an object.' }
    2: { name: 'Essence Link', desc: 'The essence dragon is spiritually linked to a specific area or landmark. The dragon gains no benefit from a long rest when more than 1 mile away from its linked area. If the dragon dies, the area it is linked to loses its vital essence until it forms a new essence dragon, which can take centuries. When a creature first enters an area that has lost its vital essence in this way, they gain a level of fatigue and a level of strife. This fatigue and strife can be removed only by completing a long rest outside the area.' }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 16). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:darkness, detect evil and good']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 20 (3d10 + 4) piercing damage plus 4 (1d8) necrotic damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 17 (3d8 + 4) slashing damage.' }
    - { name: 'Anguished Breath (Recharge 56)', desc: 'The dragon exhales a shadowy maelstrom of anguish in a 30-foot cone. Each creature in that area makes a DC 16 Wisdom saving throw, taking 40 (9d8) necrotic damage on a failed save or half damage on a success.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Shadow Dragon
```
