---
statblock: true
name: 'Young River Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 9
ac: 17
hp: 142
hit_dice: '19d10 + 38'
speed: '60 ft., fly 80 ft., swim 80 ft.'
stats:
    - 14
    - 16
    - 14
    - 12
    - 16
    - 12
damage_resistances: 'damage from nonmagical weapons'
condition_immunities: fatigue
saves:
    - { dexterity: 7 }
    - { constitution: 6 }
    - { intelligence: 5 }
    - { wisdom: 7 }
    - { charisma: 5 }
skillsaves:
    - { acrobatics: 6 }
    - { deception: 5 }
    - { insight: 7 }
    - { nature: 5 }
    - { perception: 7 }
    - { stealth: 7 }
senses: 'darkvision 120 ft., tremorsense 120 ft. (only detects vibrations in water), passive Perception 17'
languages: 'Aquan, Common, Draconic'
traits:
    0: { name: Amphibious, desc: 'The dragon can breathe air and water.' }
    1: { name: 'Flowing Grace', desc: "The dragon doesn't provoke opportunity attacks when it flies or swims out of an enemy's reach." }
    2: { name: 'Shimmering Scales', desc: 'While in water, the dragon gains three-quarters cover from attacks made by creatures more than 30 feet away.' }
    3: { name: 'Essence Link', desc: 'The essence dragon is spiritually linked to a specific area or landmark. The dragon gains no benefit from a long rest when more than 1 mile away from its linked area. If the dragon dies, the area it is linked to loses its vital essence until it forms a new essence dragon, which can take centuries. When a creature first enters an area that has lost its vital essence in this way, they gain a level of fatigue and a level of strife. This fatigue and strife can be removed only by completing a long rest outside the area.' }
    4: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 13). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:create or destroy water, fog cloud']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 19 (3d10 + 3) piercing damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) slashing damage.' }
    - { name: 'Torrential Breath (Recharge 56)', desc: 'The dragon exhales water in a 30-foot-long, 5-foot-wide line. Each creature in the area makes a DC 14 Dexterity saving throw, taking 42 (12d6) bludgeoning damage on a failed save or half damage on a success.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young River Dragon
```
